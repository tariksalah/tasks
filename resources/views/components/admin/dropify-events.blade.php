<script>
  			// Used events
  			var drEvent = $('.dropify').dropify();

  			drEvent.on('dropify.beforeClear', function(event, element) {
  					resp = confirm( "{{ __('messages.confirm_delete_image') }} : " + element.file.name + " ?");
            if (resp){
              id = event.target.id;
              document.getElementById(id + '_remove').checked = true;
              return true;
            }
            return false;
  			});

  			// drEvent.on('dropify.afterClear', function(event, element) {
  			// 		alert('File deleted');
  			// });

  			drEvent.on('dropify.errors', function(event, element) {
  					console.log('Has Errors');
  			});
</script>
