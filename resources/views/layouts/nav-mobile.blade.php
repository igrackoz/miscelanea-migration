<div class="nav-mobile-container">
    <div class="nav-circle"></div>
    <div class="nav-mobile">
        <a href="{{ route('home') }}" class="nav-mobile-item">
            <img src="{{ asset('icons/home.png') }}" style="height: 30px; width: 30px;">
            HOME
        </a>
        <a href="{{ route('departamentos') }}" class="nav-mobile-item">
            <img src="{{ asset('icons/departments.png') }}" style="height: 30px; width: 30px;">
            DEPS
        </a>
        <div class="nav-mobile-item">
            <div style="
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background-color: white;
                height: 70px;
                width: 70px;
                border-radius: 35px;">
                <img src="{{ asset('icons/search.png') }}" style="height: 38px; width: 38px;">
            </div>
        </div>
        <a href="{{ route('carrito') }}" class="nav-mobile-item">
            <img src="{{ asset('icons/cart.png') }}" style="height: 30px; width: 30px;">
            CARRITO
        </a>
        <a href="{{ route('perfil') }}" class="nav-mobile-item">
            <img src="{{ asset('icons/profile.png') }}" style="height: 30px; width: 30px;">
            PERFIL
        </a>
    </div>
</div>