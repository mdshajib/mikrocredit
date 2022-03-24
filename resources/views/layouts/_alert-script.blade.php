<script>
    const MESSAGE_TYPE = {
        'success': {
            'type':'success',
            'icon':'check-all'
        },
        'error': {
            'type':'danger',
            'icon':'block-helper'
        },
        'warning': {
            'type':'warning',
            'icon':'alert-outline'
        },
        'info': {
            'type':'info',
            'icon':'alert-circle-outline'
        },
    };
    window.addEventListener('alert', event => { 
        const type = MESSAGE_TYPE[event.detail.type];
        let messageContent = document.getElementById('message-content');
        messageContent.insertAdjacentHTML('beforeend',`
            <div class="alert alert-${type.type} alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                <i class="mdi mdi-${type.icon} label-icon"></i><strong>Success</strong> - ${event.detail.message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `);
    });
    window.addEventListener('show-delete-notification',event=>{
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#C9AC60',
        cancelButtonColor: '#fd625e',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                livewire.emit('deleteConfirm');
            }else if (result.dismiss) {
                livewire.emit('deleteCancel');
            }
        })
    })
    window.addEventListener('deleted',event=>{
        Swal.fire({
            title: 'Deleted!',
            text: event.detail.message,
            icon: 'success',
            confirmButtonColor: '#C9AC60'
        })
    })
</script>