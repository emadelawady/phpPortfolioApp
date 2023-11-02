const devMode = process.env.NODE_ENV !== "production";

const path = require('path')

let conf = {
    mode: devMode ? "development" : "production",
    entry: {
      homepage : path.resolve(__dirname,'Resources/js/homepage.js'),
      main : path.resolve(__dirname,'Resources/js/main.js'),
      styles : path.resolve(__dirname,'Resources/js/styles.js'),
      libs : path.resolve(__dirname,'Resources/js/libs.js'),
      app : path.resolve(__dirname,'Resources/js/vue/App.js'),
    },
    output: {
        path: path.join( __dirname, 'public/assets/build' ),
        publicPath: '/assets/build/',
        filename: '[name].js',
        clean: true
    },
    devServer: {
      watchFiles: ['App/Views/**/*.php', 'public/**/*'],
      host: 'phpportfolioapp.local',
      proxy: {
        '**': {
          target: 'http://phpportfolioapp.local',
          secure: false,
          changeOrigin: true
        }
      }
    },
    module: {
    rules: [
        {
        test: /\.css$/i,
        // include: path.resolve(__dirname, 'Resources/js'),
        use: ['style-loader', 'css-loader', 'postcss-loader'],
        },
    ],
    },
};

module.exports = conf;