const path = require('path')

module.exports = {

    mode:'development',
    entry:'./js/main.js',
    output: {
        path: path.resolve(__dirname, 'html'),
        filename: 'bundle.js',
    },
    watch: true
}