module.exports = {
    compile: {
        options: {
            pretty:true,
            data: {
                debug: true
            }
        },
        files: [{
            expand: true, // setting to true enables the following options
            cwd: 'pug', // src matches are relative to this path
            src: ['{,*/}*.pug', '!_*.pug'], // matches *.jade in cwd and 1 level down
            dest: '', // destination prefix
            ext: '.php' // replace existing extensions with this value
        }]
    }
};
