function wp_logout() {
    $user_id = get_current_user_id();
 
    wp_destroy_current_session();
    wp_clear_auth_cookie();
    wp_set_current_user( 0 );
 
    /**
     * Fires after a user is logged out.
     *
     * @since 1.5.0
     * @since 5.5.0 Added the `$user_id` parameter.
     *
     * @param int $user_id ID of the user that was logged out.
     */
    do_action( 'wp_logout', $user_id );
}