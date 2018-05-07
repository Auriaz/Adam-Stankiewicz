 const path = require('path');
 //import img from './file.png'

module.exports = {
  entry: {
    App: "./app/assets/scripts/App.js",
    Vendor: "./app/assets/scripts/Vendor.js"
  },
  output: {
  
   path: path.resolve(__dirname, "./app/temp/scripts"),
   filename: '[name].js'
  
  }, 

  module: {
  	loaders: [
      {
      	loader: 'babel', 
        include: [
        
        path.resolve(__dirname, "./app/temp/scripts")
         ],

      	query: {
      		presets: ['es2015']
      	},
      	test: /\.js$/,
      	exclude: ['node_modules'] 
      }
  	]
  }
};

