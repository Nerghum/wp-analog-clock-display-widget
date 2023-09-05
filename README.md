#Analog Clock Widget Plugin Documentation
Introduction
The Analog Clock Widget Plugin is a simple WordPress plugin that allows you to display an analog clock on your WordPress website using a shortcode. This documentation provides information on how to use the plugin and customize the clock design.

Plugin Details
Plugin Name: Analog Clock Widget
Version: 1.0
Author: nerghum
Installation
Follow these steps to install and activate the Analog Clock Widget Plugin on your WordPress website:

Download the plugin ZIP file.
Log in to your WordPress admin dashboard.
Navigate to "Plugins" > "Add New."
Click the "Upload Plugin" button at the top of the page.
Choose the ZIP file you downloaded and click "Install Now."
Once installed, click the "Activate" button to activate the plugin.
Usage
To display an analog clock on your WordPress site, you can use the [analog_clock] shortcode. The default clock design is a simple analog clock with a white background.

Example usage in a WordPress post or page:

plaintext
Copy code
[analog_clock]
Customizing the Clock Design
You can easily customize the clock design by changing the included PHP file. The plugin comes with two different clock styles: style1.php and style2.php.

Changing the Clock Style
Open the WordPress plugin directory on your server. The path should be something like wp-content/plugins/analog-clock-widget.

Locate the style1.php and style2.php files.

To change the clock design, edit the style1.php or style2.php file based on your preference. You can modify the HTML and CSS code within these files to create a unique clock design.

Save your changes.

In your WordPress post or page, use the [analog_clock] shortcode as before. The clock design will reflect the changes made in the selected PHP file.

Example: Changing to basic design

edit the plugin file and change style1.php to basic.php clock design


Now, when you use the [analog_clock] shortcode, it will display the clock design defined in style1.php.

Support
If you encounter any issues or need assistance with the Analog Clock Widget Plugin, please reach out to our support team at nerghum@gmail.com.

Conclusion
The Analog Clock Widget Plugin provides a simple way to display analog clocks on your WordPress website. You can easily customize the clock design by editing the style1.php or basic.php files to match your website's aesthetics.

Enjoy using the Analog Clock Widget Plugin!
