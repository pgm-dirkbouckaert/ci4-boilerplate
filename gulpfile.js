require('dotenv').config();
// import gulp from 'gulp';
// import browserSync from 'browser-sync';
const gulp = require('gulp');
const browserSync = require('browser-sync').create();

/*
 * CHANGE THIS ACCORDING TO YOUR PROJECT
 */
// const url = 'http://localhost/';
const domain = process.env['app.domain'];
const path = process.env['app.path'];
const url = `http://${domain}${path}/`;

/*
 * This function only includes the most basic browser-sync settings needed
 * to get a watch server running. Please refer to the browser-sync docs for other
 * available options.
 */
const startServer = function (done) {
  // Initialize BrowserSync
  browserSync.init({
    proxy: url,
    port: 3000,
    // host: url,
  });
  gulp
    .watch(['public/**/*.', 'app/Views/**/*']) // CHANGE THIS ACCORDING TO YOUR NEEDS
    .on('change', browserSync.reload);
  done();
};

// export { startServer };
exports.startServer = startServer;
