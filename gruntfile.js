module.exports = function (grunt) {
    grunt.initConfig({
        uncss: {
            dist: {
                files: [
                    { src: 'index.php', dest: 'cleancss/tidy.css' }
                ]
            }
        },
        cssmin: {
            dist: {
                files: [
                    { src: 'css/combined.css', dest: 'cleancss/tidy.css' }
                ]
            }
        }
    });

    // Load the plugins
    grunt.loadNpmTasks('grunt-uncss');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // Default tasks
    grunt.registerTask('default', ['uncss', 'cssmin']);
};