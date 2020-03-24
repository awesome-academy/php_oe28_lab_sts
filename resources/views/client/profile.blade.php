<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('messages.profile') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <img src="{{ asset('images/img_avatar.png') }}" alt="" class="avatar1">
                                </th>
                                <td><input id="name" class="border-input mt-3" readonly class="mt-4"></td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('messages.email') }}</th>
                                <td><input id="email" class="border-input" readonly></td>
                            </tr>
                            <tr>
                                <th scope="row">{{ __('messages.phone') }}</th>
                                <td><input id="phone" class="border-input" readonly></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
