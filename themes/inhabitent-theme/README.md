# About Inhabitent Camping Supply Co. 

A multi-page website with a blog for a camping supply company, Inhabitent Camping Supply Co., using WordPress as a content management system.

- This is a custom theme, also enabiling the client to dynamically modify information about their company on the WordPress backend. For instance, we have created a custom widget plugin to easily change business hours. 

- There's a toggle search feature that once search icon on the navigation menu is clicked, the search input field will appear and re-direct you to the results page when space bar is pressed. 

## Technologies 

- PHP7, using MAMP as a local server environment for development;
- SCSS, converted into CSS using Gulp task;
- JavaScript, jQuery library. 

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `redstarter-master` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).
