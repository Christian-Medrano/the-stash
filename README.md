# The Stash

##### UI Pattern Library 

###### v1.0.0-alpha

The Stash is a proposed conceptual design system created for [Font Squirrel](http://fontsquirrel.com). The objective of this project is to unifiy Font Squirrel's existing interface, and to provide a library for both designers as well as developers looking to extend the Font Squirrel brand.

## Design

The Stash components were designed in Adobe Experience Design. The working file guidelines can be [downloaded here]().

## Development

### Prerequisites

If you do not want to edit the source code and only want to implement existing Stashed elements, simply copy the CSS and JS folders into your own project, and link the appropriate files. If you would like to improve or make any additions to The Stash, there are a few additional requirements.

##### 1. Install Node.js

We use the node package manager to install dependancies, primarily the SCSS preprocessor used to compile the CSS code. Download the latest version of node.js from the official website and complete the installation.

[NodeJS.org](https://nodejs.org/)

##### 2. Run NPM Install

First, open the command terminal and enter the directory where you placed The Stash source files.
```
cd /Users/You/project-directory
```
Once inside the project directory, enter and execute the following command to install all node modules.
```
npm install
```

##### 3. Run SCSS

After npm has completed installing all packages, run the following command to start watching the SCSS folder.
```
npm run scss
```
Now, anytime a change is saved in any of the .scss files within the SCSS folder, they will be compiled and saved to `css/style.css`.

## Built With

* [jQuery](https://jquery.com/) - A write less, do more JavaScript library
* [Sticky Kit](http://leafo.net/sticky-kit/) - A jQuery plugin for making smart sticky elements

## Versioning

We use [SemVer](https://semver.org/) for versioning

## Authors

* **Christian Mikhael Medrano** - initial design and development - [christianmedrano.com](http://christianmedrano.com)
