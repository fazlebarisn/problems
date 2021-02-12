if( !function_exists( 'wcmmq_fixer' ) ) {
	function wcmmq_fixer() {
		$output = <<<EOT
		<script type="text/javascript"
  src="https://cdn.rawgit.com/meetselva/attrchange/master/js/attrchange.js"></script>
		<script type="text/javascript" id="wcmmq_fixer">

			jQuery(document).ready(function($){
				$('div.quantity input[type=number]').attrchange({
					trackValues: true, /* Default to false, if set to true the event object is 
								updated with old and new value.*/
					callback: function (event) { 
						console.log(event);
						if(event.attributeName == 'min'){
							console.log(event.oldValue, event.newValue);
							$($(event.target).val(event.newValue));
						}
					}        
				});
			});

		</script>
EOT;
		if(is_singular()){
			echo $output;
		}
	}
}

add_action( 'wp_footer', 'wcmmq_fixer' );
