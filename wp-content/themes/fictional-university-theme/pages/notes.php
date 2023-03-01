- get_template_directory() is a WordPress function that returns the filesystem path to the current theme's directory without the trailing slash. This function returns the absolute server path to the directory where the currently active theme's files are located. It's different from get_template_directory_uri() which returns the URL or the web path to the theme's directory.
- Filesystem path: This refers to the path to a directory or file on the server's file system. It's the actual path to the file or directory on the server's hard drive.
- Trailing slash: In a directory path, a trailing slash refers to the forward slash (/) character that appears at the end of the path. For example, in the path /path/to/directory/, the trailing slash is the final forward slash character.
- Absolute server path: This refers to the complete path to a file or directory on the server's file system, starting from the server's root directory. For example, the absolute server path to a file located at /var/www/html/my-site/wp-content/themes/my-theme/my-file.php would be /var/www/html/my-site/wp-content/themes/my-theme/.


***************************************
- WP_Query is a class that WP provides
- 'show_in_rest' => true : Will load the new editor screen
- 'has_archive' => true : http://university.wp.local/event -> Will look for archive.php
- 'rewrite' => array( 'slug' => 'events' ) : I want the slug to be events and not event
- It's a good practise to create a new template file for this post type: archive-event.php


***************************************
When accessing resources such as stylesheets, script files, and images in WordPress, you can use either get_theme_file_path or get_theme_file_uri. The main difference between the two functions is the type of URL they return.

get_theme_file_path returns the server file system path to the requested file, while get_theme_file_uri returns the URL to the requested file.

Here are some guidelines on when to use each function:

Use get_theme_file_path when you need to access a file's physical location on the server. This is useful if you need to perform file operations on the file, such as reading or writing to it.

Use get_theme_file_uri when you need to reference a file's URL in HTML or CSS code. This is useful when you need to include a file in a web page, such as a stylesheet or an image.

Here are some examples of when to use each function:

Use get_theme_file_path to access a template file in your theme's folder, like header.php. This will return the file path to the template file on the server.

Use get_theme_file_uri to include a stylesheet in your header.php file. This will return the URL to the stylesheet, which you can use in your HTML.

Use get_theme_file_path to read the contents of a file, like a JSON file containing data for your site. This will return the file path to the JSON file on the server.

Use get_theme_file_uri to include an image in your site's content. This will return the URL to the image, which you can use in your HTML.

I hope this helps clarify when to use each function. Let me know if you have any other questions!

***************************************

- is_page('about-us')
- wp_get_post_parent_id()
- get_post_type() == 'event'
- get_post_type_archive_link('event')
- site_url
- site_url('/blog')
- get_theme_file_uri('/images/ocean.jpg')
- wp_trim_words
- wp_trim_words(get_the_content(), 18)
- In PHP, the arrow operator -> is used to access properties and methods of an object.
- has_excerpt()