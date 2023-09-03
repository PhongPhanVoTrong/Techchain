<x-mail::message>

    <h4> Chào bạn! Mời bạn nhắp vào nút bên dưới để xác thực email của mình</h4>
    <x-mail::button :url="$actionUrl" :color="'primary'"> Xác thực email </x-mail::button>
    <p>Nếu bạn không có đăng ký tài khoản, vui lòng bỏ qua thư này</p>
    <p>Nếu có vấn đề khi nhắp nút Xác thực email thì nhắp link dưới đây nhé : <span
            class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
    </p>
</x-mail::message>
