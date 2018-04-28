module.exports = {
    my_target:{
        files:[{
            expand: true,
            cwd: 'style/',
            src:["*.css", "!*.min.css"],
            dest:'style/',
            ext:'.min.css'
        }]
    }
};
