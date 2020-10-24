<script>
	function confirmDeletion(id, description) {
		Swal.fire({
			title: '{{ __('Do you want to proceed?') }}',
      html: '{{ __('You are trying to remove: ') }}<strong>'
          + description
          + '</strong><br><span class="text-danger">{{ __('This action cannot be reversed!') }}</span>',
			icon: 'question',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: '{{ __('Yes, proceed!') }}',
			cancelButtonText: '{{ __('Not now.') }}',
		}).then(function(result) {
			if (result.value) {
				$.get(`/@yield('route-delete-prefix')/${id}/destroy`, function(data) {
					if (data.status == 'success') {
						Swal.fire(
							'{{ __('Deleted!') }}',
							'{{ __('Deletion performed successfully.') }}',
							'success'
						).then(function(result) {
							window.location.reload();
						});
					} else {
						Swal.fire(
							'{{ __('Error!') }}',
							'{{ __('There was a problem deleting the requested item. Please contact support!') }}',
							'error'
						);
					}
				});
			}
		});
	}
</script>
