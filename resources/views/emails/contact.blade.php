<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo contacto — Treemix</title>
</head>
<body style="margin:0; padding:0; background-color:#0a0a0b; font-family: Arial, Helvetica, sans-serif;">

<table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#0a0a0b; padding: 48px 20px;">
    <tr>
        <td align="center">
            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="600" style="max-width:600px; width:100%;">

                {{-- Header --}}
                <tr>
                    <td align="center" style="background-color:#1f1f24; padding: 32px 40px; border-radius: 12px 12px 0 0; border-bottom: 1px solid rgba(200,200,208,0.08);">
                        <img src="{{ asset('treemix.webp') }}" height="48" alt="Treemix Profesional" style="height:48px; display:block; margin:0 auto;">
                    </td>
                </tr>

                {{-- Body --}}
                <tr>
                    <td style="background-color:#1f1f24; padding: 36px 40px 40px;">

                        <h1 style="margin:0 0 6px 0; font-size:22px; font-weight:600; color:#e5e5ea; letter-spacing:-0.3px; line-height:1.3;">
                            Nuevo mensaje desde la web
                        </h1>
                        <p style="margin:0 0 28px 0; font-size:14px; color:#888894; line-height:1.5;">
                            Alguien completó el formulario de contacto en treemix.pro
                        </p>

                        {{-- Reason badge --}}
                        <div style="margin-bottom:28px;">
                            <span style="display:inline-block; background-color:rgba(46,204,64,0.12); border:1px solid rgba(46,204,64,0.3); color:#2ecc40; font-size:11px; font-weight:700; letter-spacing:0.8px; text-transform:uppercase; padding:6px 14px; border-radius:20px;">
                                {{ $reason }}
                            </span>
                        </div>

                        {{-- Data grid --}}
                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-bottom:24px; border-radius:8px; overflow:hidden;">
                            <tr>
                                <td style="padding:13px 16px; background-color:rgba(10,10,11,0.55); border-bottom:1px solid rgba(200,200,208,0.06);">
                                    <p style="margin:0 0 3px 0; font-size:10px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:#888894;">Nombre</p>
                                    <p style="margin:0; font-size:15px; color:#e5e5ea; font-weight:400;">{{ $name }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:13px 16px; background-color:rgba(10,10,11,0.55); border-bottom:1px solid rgba(200,200,208,0.06);">
                                    <p style="margin:0 0 3px 0; font-size:10px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:#888894;">Email</p>
                                    <p style="margin:0; font-size:15px; color:#e5e5ea;">
                                        <a href="mailto:{{ $email }}" style="color:#e5e5ea; text-decoration:none;">{{ $email }}</a>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:13px 16px; background-color:rgba(10,10,11,0.55); border-bottom:1px solid rgba(200,200,208,0.06);">
                                    <p style="margin:0 0 3px 0; font-size:10px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:#888894;">Tipo de cultivo</p>
                                    <p style="margin:0; font-size:15px; color:#e5e5ea;">{{ $crop_type }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:13px 16px; background-color:rgba(10,10,11,0.55); border-bottom:1px solid rgba(200,200,208,0.06);">
                                    <p style="margin:0 0 3px 0; font-size:10px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:#888894;">Teléfono</p>
                                    <p style="margin:0; font-size:15px; color:#e5e5ea;">{{ $phone ?? '—' }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:13px 16px; background-color:rgba(10,10,11,0.55); border-bottom:1px solid rgba(200,200,208,0.06);">
                                    <p style="margin:0 0 3px 0; font-size:10px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:#888894;">Motivo</p>
                                    <p style="margin:0; font-size:15px; color:#e5e5ea;">{{ $reason }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:13px 16px; background-color:rgba(10,10,11,0.55);">
                                    <p style="margin:0 0 3px 0; font-size:10px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:#888894;">Asunto</p>
                                    <p style="margin:0; font-size:15px; color:#e5e5ea;">{{ $subject }}</p>
                                </td>
                            </tr>
                        </table>

                        {{-- Message block --}}
                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                            <tr>
                                <td style="padding:20px; background-color:rgba(10,10,11,0.55); border-radius:8px; border-left:3px solid rgba(46,204,64,0.45);">
                                    <p style="margin:0 0 10px 0; font-size:10px; font-weight:700; letter-spacing:1px; text-transform:uppercase; color:#888894;">Mensaje</p>
                                    <p style="margin:0; font-size:15px; color:#e5e5ea; line-height:1.7; white-space:pre-wrap;">{{ $body }}</p>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                        {{-- WhatsApp CTA --}}
                        @php
                            $waText = urlencode("�Hola, {$name}! nos comunicamos desde TreeMix. Nos lleg� tu consulta acerca de " . mb_strtolower($reason) . ".");
                            $waPhone = preg_replace('/\D/', '', $phone ?? '');
                            $waUrl = $waPhone
                                ? "https://wa.me/{$waPhone}?text={$waText}"
                                : "https://wa.me/?text={$waText}";
                        @endphp

                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="margin-top:24px; margin-bottom: 12px">
                            <tr>
                                <td align="center">
                                    <a href="{{ $waUrl }}" style="display:inline-block; background-color:#25d366; color:#ffffff; font-family:Arial,Helvetica,sans-serif; font-size:15px; font-weight:700; text-decoration:none; padding:14px 32px; border-radius:8px; letter-spacing:0.2px;">
                                        Enviar WhatsApp
                                    </a>
                                </td>
                            </tr>
                        </table>


                {{-- Footer --}}
                <tr>
                    <td align="center" style="padding:20px 40px; background-color:#111114; border-radius:0 0 12px 12px; border-top:1px solid rgba(200,200,208,0.06);">
                        <p style="margin:0; font-size:12px; color:#888894; line-height:1.6;">
                            Treemix Profesional &nbsp;&middot;&nbsp; Respondé directamente a este email para contactar a {{ $name }}
                        </p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
