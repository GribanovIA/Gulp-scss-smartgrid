const path = require("path");
const webpack = require("webpack");
const VueLoaderPlugin = require('vue-loader/lib/plugin');

module.exports = {
    plugins: [ 
        new webpack.ProvidePlugin({ 
            "jQuery": "jquery", 
            "window.jQuery": "jquery", 
            "jquery": "jquery", 
            "window.jquery": "jquery", 
            "$": "jquery", 
            "window.$": "jquery" 
        }),
        new VueLoaderPlugin() 
    ],
    
    entry: {
        main: "./src/js/index.js",
    },

    output: {
        filename: "[name].js",
        chunkFilename: "[name].js",
        publicPath: "/"
    },

    optimization: {
        splitChunks: {
            cacheGroups: {
                vendor: {
                    test: /node_modules/,
                    chunks: "initial",
                    name: "vendor",
                    enforce: true
                }
            }
        }
    },

    module: {
        rules: [
            {
              test: /\.js$/,
              exclude: /node_modules/,
              use: {
                  loader: require.resolve("babel-loader"),
                  query: {
                      presets: [
                          ["@babel/preset-env", { modules: false }]
                      ]
                  }
              }
            },
            {
              test: /\.vue$/,
              loader: 'vue-loader'
            }
        ]
    },

    resolve: {
        alias: {
            "%modules%": path.resolve(__dirname, "src/blocks/modules"),
            'vue$': 'vue/dist/vue.esm.js' //По умолчанию импортируется только Runtime сборка Vue при этом если мы используем шаблоны внутри html документа они не работают. Для работы шаблонов нужно скачать полную версию Vue которая содержик компилятор шаблонов. Подробнее можно почитать тут - https://ru.vuejs.org/v2/guide/installation.html#Runtime-%D0%9A%D0%BE%D0%BC%D0%BF%D0%B8%D0%BB%D1%8F%D1%82%D0%BE%D1%80-vs-Runtime-only по поводу псевдонима (alias) тут - https://webpack.js.org/configuration/resolve/#resolvealias
        }
    }
};
