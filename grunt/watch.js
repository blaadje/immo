module.exports = {
    sass:{
        files: ['sass/*sass'],
        tasks: ['sass', 'cssmin'],
    },
    pug:{
        files: ['pug/*pug', '!pug/_*.pug'],
        tasks: ['newer:pug'],
    }
};
