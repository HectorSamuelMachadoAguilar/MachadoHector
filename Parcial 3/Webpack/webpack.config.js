const path = require('path');
module.export= {
    entry: './src/index.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname,'dist')
    }
}

const HtmlWebpackPlugin = require('html-webpack-plugin');
module.exports = {
    Plugins: [
        new HtmlWebpackPlugin({
            template: '.src/index.html',
            filename: 'index.html',
            inject: 'body'
        })
    ]
}

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
module.exports= {
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [MiniCssExtractPlugin.loader, "css-loader"]
            }
        ]
    },
    plugins: [new MiniCssExtractPlugin()],
}

//extension code runner ".run"s