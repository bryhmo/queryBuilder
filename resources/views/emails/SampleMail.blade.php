<x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

<x-mail::panel>
This is the panel content.
</x-mail::panel>

<x-mail::table>
|Lincoln       | items         | Example  |
| ------------- |:-------------:| --------:|
| first list      | iphone      | $10      |
| second list     | samsung     | $20      |
</x-mail::table>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
