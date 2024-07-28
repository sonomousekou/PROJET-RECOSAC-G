{{-- <div class="col-xs-12 col-sm-6 language">
    <ul class="hdr_tp_right text-right">
        <li class="lan_area"><a href="#"><i class="fa fa-language "></i> {{__('Langue')}} <i class="fa fa-caret-down"></i></a>
            <ul class="csub-menu">
                @foreach($available_locales as $locale_name => $available_locale)
                @if($available_locale === $current_locale)
                <li>{{ $locale_name }}</li>
                @else
                <li><a href="langue/{{ $available_locale }}">{{ $locale_name }}</a></li>
                @endif
            @endforeach

            </ul>
        </li>
        <li class="account_area"><a href=""><i class="fa fa-gg"></i> {{__('Faire un don')}}</a></li>
        </li>
    </ul>
</div> --}}

{{-- <div class="language">
    <select>
        @foreach($available_locales as $locale_name => $available_locale)
        <option>{{ $locale_name }}</option>
        @endforeach
    </select>
</div> --}}

<div class="language">
    <select onchange="location = this.value;">
        @foreach($available_locales as $locale_name => $available_locale)
        <option value="langue/{{ $available_locale }}" {{ $available_locale === $current_locale ? 'selected' : '' }}>
            {{ $locale_name }}
        </option>
        @endforeach
    </select>
</div>
