<?php
/**
 * User Profile API: UserProfile class
 */
class UserProfile {
    private $name;
    private $email;
    private $role;
    private $registered_at;
    private $avatar_url;
    /**
     * UserProfile constructor.
     * @param string $name User's display name.
     * @param string $email User's email address.   
     * @param string $role User's role (e.g., 'admin', 'editor', 'subscriber').
     * @param string $registered_at Date when the user registered (in 'Y-m-d' format).
     * @param string $avatar_url URL to the user's avatar image.
     */
    public function __construct($name, $email, $role, $registered_at, $avatar_url) {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->registered_at = $registered_at;
        $this->avatar_url = $avatar_url;
    }
    /**
     * Get the user's display name.
     *
     * @return string
     */
    public function get_display_name() {
        return $this->name;
    }

    /**
     * Check if the user is an administrator.
     *
     * @return bool
     */
    public function is_admin() {
        return $this->role === 'admin';
    }

    /**
     * Get the number of days since the user registered.
     *
     * @return int
     */
    public function days_since_registered() {
        $now = new DateTime();
        $registered_date = new DateTime($this->registered_at);
        $interval = $now->diff($registered_date);
        return $interval->days;
    }
}
?>