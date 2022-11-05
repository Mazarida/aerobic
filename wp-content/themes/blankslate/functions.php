<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
    load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    global $content_width;
    if ( ! isset( $content_width ) ) $content_width = 640;
    register_nav_menus(
        array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
    );
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
    wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
    if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
    if ( $title == '' ) {
        return '&rarr;';
    } else {
        return $title;
    }
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
    return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
    register_sidebar( array (
        'name' => __( 'Sidebar Widget Area', 'blankslate' ),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
function blankslate_custom_pings( $comment )
{
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
    <?php
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
    if ( !is_admin() ) {
        global $id;
        $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
        return count( $comments_by_type['comment'] );
    } else {
        return $count;
    }
}
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

/* cForm custom code */

//response generation function

$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

}
if (isset($_POST['cf_submitted'])) {
    $name1 = $_POST['first-name'];
    $name2 = $_POST['second-name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $lessons = $_POST['lessons'];
    $comment = $_POST['comment'];
    //php mailer variables
    $to = get_option('admin_email');
    $subject = "Заявка с сайта ".get_bloginfo('name');
    $headers = 'From: '.$name1.' <'. $email . ">\r\n" .
        'Reply-To: ' . $email . "\r\n";
    //validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", "Неверный адрес Email");
    else //email is valid
    {
        //validate presence of name and message
        if(empty($phone)){
            my_contact_form_generate_response("error", "Не указан номер телефона");
        }
        else //ready to go!
        {
            $message = "
                Имя: $name1 \r\n
                Фамилия: $name2 \r\n
                Телефон: $phone \r\n
                Email: $email \r\n
                Категория: $category \r\n
                Кол-во занятий: $lessons \r\n
                Комментарий: $comment \r\n
            ";
            $sent = wp_mail($to, $subject, strip_tags($message), $headers);
            if($sent) my_contact_form_generate_response("success", "Вашая заявка отправлена!"); //message sent!
            else my_contact_form_generate_response("error", "Ошибка! Заявка не отправлена."); //message wasn't sent
        }
    }
}