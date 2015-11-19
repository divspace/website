<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td width="15%" valign="top">
      <strong>From</strong>
    </td>
    <td width="85%" valign="top">
      <a href="tel:{{ $phoneNumber }}">{{ preg_replace('/^\+([0-9]{3})([0-9]{3})([0-9]{4})$/', '(${1}) ${2}-${3}', $phoneNumber) }}</a>
    </td>
  </tr>
  <tr>
    <td valign="top">
      <strong>Message</strong>
    </td>
    <td valign="top">
      <a href="{{ $messageLink }}.mp3">Listen</a> ({{ $messageDuration }} seconds)
    </td>
  </tr>
</table>
