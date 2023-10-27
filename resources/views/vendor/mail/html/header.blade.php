@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Top-Travaux-France')
<img src="{{asset('images/logo_v7.png')}}" class="logo" alt="top travaux Logo" style="width:80px;">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
