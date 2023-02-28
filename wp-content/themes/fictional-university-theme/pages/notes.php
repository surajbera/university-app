- get_template_directory() is a WordPress function that returns the filesystem path to the current theme's directory without the trailing slash. This function returns the absolute server path to the directory where the currently active theme's files are located. It's different from get_template_directory_uri() which returns the URL or the web path to the theme's directory.
- Filesystem path: This refers to the path to a directory or file on the server's file system. It's the actual path to the file or directory on the server's hard drive.
- Trailing slash: In a directory path, a trailing slash refers to the forward slash (/) character that appears at the end of the path. For example, in the path /path/to/directory/, the trailing slash is the final forward slash character.
- Absolute server path: This refers to the complete path to a file or directory on the server's file system, starting from the server's root directory. For example, the absolute server path to a file located at /var/www/html/my-site/wp-content/themes/my-theme/my-file.php would be /var/www/html/my-site/wp-content/themes/my-theme/.

- WP_Query is a class that WP provides
- 'show_in_rest' => true : Will load the new editor screen
- 'has_archive' => true : http://university.wp.local/event -> Will look for archive.php
- 'rewrite' => array( 'slug' => 'events' ) : I want the slug to be events and not event
- It's a good practise to create a new template file for this post type: archive-event.php