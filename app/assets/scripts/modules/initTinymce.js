// Import TinyMCE
import tinymce from 'tinymce/tinymce'

// A theme is also required
import 'tinymce/themes/modern/theme'
// Any plugins you want to use has to be imported
import 'tinymce/plugins/paste'
import 'tinymce/plugins/link'
import 'tinymce/plugins/autoresize'
import 'tinymce/plugins/imagetools'
import 'tinymce/plugins/table'
import 'tinymce/plugins/wordcount'
import 'tinymce/plugins/image'
import 'tinymce/plugins/media'
import 'tinymce/plugins/advlist'
import 'tinymce/plugins/autolink'
import 'tinymce/plugins/charmap'
import 'tinymce/plugins/print'
import 'tinymce/plugins/preview'
import 'tinymce/plugins/hr'
import 'tinymce/plugins/anchor'
import 'tinymce/plugins/pagebreak'
//import 'tinymce/plugins/a11ychecker'
import 'tinymce/plugins/searchreplace'
import 'tinymce/plugins/wordcount'
import 'tinymce/plugins/visualblocks'
import 'tinymce/plugins/visualchars'
import 'tinymce/plugins/code'
import 'tinymce/plugins/fullscreen'
//import 'tinymce/plugins/tinymcespellchecker'
//import 'tinymce/plugins/advcode'
import 'tinymce/plugins/insertdatetime'
import 'tinymce/plugins/nonbreaking'
import 'tinymce/plugins/save'
import 'tinymce/plugins/contextmenu'
import 'tinymce/plugins/directionality'
import 'tinymce/plugins/template'
import 'tinymce/plugins/textcolor'
import 'tinymce/plugins/colorpicker'
import 'tinymce/plugins/textpattern'
import 'tinymce/plugins/codesample'
import 'tinymce/plugins/toc'
import 'tinymce/plugins/help'
import 'tinymce/plugins/emoticons'
import 'tinymce/plugins/lists'



// File loader that handles moving the skin files
require.context(
  'file-loader?name=[path][name].[ext]&context=node_modules/tinymce!tinymce/skins',
  true,
  /.*/
)


import $ from 'jquery';




	// Initialize TinyMCE
tinymce.init({
  selector: 'textarea.tinymce',
  //Width and height of the editor
  height: 500,
  width: '100%',

  //Theme of editor
  theme: 'modern',
  skin: 'lightgray',

  //plagins for editor
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak ',
    'searchreplace wordcount visualblocks visualchars code fullscreen ',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'template paste textcolor colorpicker textpattern imagetools codesample toc help emoticons hr'
  ],

  //toolbar 
  toolbar1: 'newdocument | print preview searchreplace | undo redo | insert | bullist numlist outdent indent |   visualblocks  fullscreen help',
  toolbar2: 'styleselect | fontselect | fontsizeselect | bold italic underline  | alignleft aligncenter alignright alignjustify | forecolor backcolor | removeformat | emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],

  //font 
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ],

    setup (editor) {
    editor.on('keyup', e => console.log(editor.getContent()))
}
})


