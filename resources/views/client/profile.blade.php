<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('messages.profile') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-2">
                        <img src="{{ asset('images/img_avatar.png') }}" alt="" class="avatar1">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-3">
                        <!-- /.username -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <th scope="row">{{ __('messages.email') }}</th>
                                <td><!-- /.email --></td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('messages.phone') }}</th>
                                <td><!-- /.phone --></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
