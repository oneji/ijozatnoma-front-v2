<div class="register__type">
    <a href="{{ route('registerCompany') }}" class="{{ Request::segment(3) === 'company' ? 'active' : null }}">
        <i class="fas fa-building mr-2"></i>
        Шахси Ҳуқуқӣ
    </a>
    <a href="{{ route('registerCitizen') }}" class="{{ Request::segment(3) === 'citizen' ? 'active' : null }}">
        <i class="fas fa-user mr-2"></i>
        Шахси инфироди
    </a>
</div>