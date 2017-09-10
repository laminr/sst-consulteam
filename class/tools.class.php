<?php
class Tools {
	
	public static function generateImage($code) {

		header ('Content-type: image/png');
                $image = imagecreate('56', '20');
                $noir = imagecolorallocate($image, '0', '0', '0');
                $blanc = imagecolorallocate($image, '255', '255', '255');
                imagestring($image, '4', '4', '2', $code, $blanc);
                imagepng($image, 'code.png');
                header ('Content-type: text/html');
        
	}

        function php_split_js_make_email($phpemail) {
                $pieces = explode("@", $phpemail);
                echo '
                        <script type="text/javascript">
                                var a = "<a href=\'mailto:";
                                var b = "' . $pieces[0] . '";
                                var c = "' . $pieces[1] .'";
                                var d = "\' class=\'email\'>";
                                var e = "</a>";
                                document.write(a+b+"@"+c+d+b+"@"+c+e);
                        </script>
                        <noscript>Please enable JavaScript to view emails</noscript>
                ';
        }

            
        public static function generateFormToken($form) {

                // generate a token from an unique value, took from microtime, you can also use salt-values, other crypting methods...
                $token = md5(uniqid(microtime(), true));  

                // Write the generated token to the session variable to check it against the hidden field when the form is sent
                $_SESSION[$form.'_token'] = $token; 

                return $token;
        }

}