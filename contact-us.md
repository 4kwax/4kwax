---
layout: null
title: Contact Us
permalink: /contact-us/
---
<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | 4kwax</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* कॉपी और सिलेक्शन रोकने का ताला */
        * {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
            -webkit-touch-callout: none !important;
            box-sizing: border-box;
        }

        /* फॉर्म के अंदर टाइपिंग की छूट */
        input, textarea, button {
            -webkit-user-select: auto !important;
            user-select: auto !important;
            pointer-events: auto !important;
        }

        body { 
            font-family: 'Poppins', sans-serif; 
            margin: 0; 
            padding: 0; 
            background: #f4f7f6; 
            color: #333; 
            display: flex; 
            flex-direction: column; 
            min-height: 100vh; 
        }

        /* हेडर सेटिंग */
        .header { 
            background: #111; 
            color: #fff; 
            padding: 20px; 
            text-align: center; 
            width: 100%;
        }
        .header a { 
            color: #fff; 
            text-decoration: none; 
            font-size: 22px; 
            font-weight: 700; 
            letter-spacing: 1px; 
        }

        /* मेन कंटेनर (इसे बीच में रखने के लिए) */
        .main-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 40px 15px;
        }

        .container { 
            width: 100%; 
            max-width: 700px; 
            background: white; 
            padding: 30px; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.05); 
            border-radius: 12px; 
        } 
        
        h1 { 
            text-align: center; 
            color: #111; 
            font-size: 32px; 
            margin-top: 0;
            margin-bottom: 20px; 
        }

        .notice-box {
            background: #fff3cd; 
            padding: 20px; 
            border-left: 6px solid #ffc107; 
            margin: 25px 0; 
            border-radius: 4px;
            font-size: 15px;
        }

        .form-box {
            background: #fcfcfc; 
            padding: 25px; 
            border-radius: 10px; 
            border: 1px solid #e0e0e0; 
            margin-top: 30px;
        }

        label { font-weight: 600; display: block; margin-bottom: 8px; }

        input, textarea {
            width: 100%; 
            margin-bottom: 20px; 
            padding: 12px; 
            border: 1px solid #ddd; 
            border-radius: 6px;
            font-family: inherit;
        }

        button {
            background: #007bff; 
            color: white; 
            padding: 14px; 
            border: none; 
            border-radius: 6px; 
            font-weight: 700; 
            font-size: 16px;
            cursor: pointer; 
            width: 100%; 
            transition: background 0.3s;
        }
        button:hover { background: #0056b3; }

        /* फुटर सेटिंग */
        .site-footer { 
            background: #111; 
            color: #fff; 
            padding: 25px 0; 
            text-align: center; 
            width: 100%; 
        }
        .footer-links { 
            margin-bottom: 10px; 
            display: flex; 
            justify-content: center; 
            flex-wrap: wrap; 
            gap: 20px; 
        }
        .footer-links a { 
            color: #bbb; 
            text-decoration: none; 
            font-size: 13px; 
        }
        .footer-links a:hover { color: #007bff; }
        .footer-copyright { font-size: 11px; color: #777; margin-top: 10px; }
    </style>
</head>
<body>

    <div class="header"><a href="/">4kwax | Home</a></div>
    
    <div class="main-wrapper">
        <div class="container">
            <h1>Contact Us</h1>
            <p style="text-align: center; color: #666;">Welcome to 4kwax! Please note that all our content is AI-generated.</p>

            <div class="notice-box">
                <h3 style="margin-top: 0; color: #856404; font-size: 18px;">Fair Use & Copyright Notice</h3>
                <p style="color: #856404; margin-bottom: 0; line-height: 1.6;">
                    This website operates strictly under the <strong>Fair Use</strong> doctrine. All visual content is uniquely created using Artificial Intelligence tools. We do not host or distribute real copyrighted photographs. Everything is original AI art created for artistic purposes.
                </p>
            </div>

            <div class="form-box">
                <h3 style="color: #007bff; margin-top: 0; margin-bottom: 15px;">Send a Message</h3>
                
                <form action="#" onsubmit="alert('Thank you for reaching out to 4kwax! \n\nREMINDER: All images on this website are 100% AI-Generated and fall under Fair Use policy.'); return false;">
                    <label>Name</label>
                    <input type="text" placeholder="Your Name" required>
                    
                    <label>Email</label>
                    <input type="email" placeholder="Your Email" required>
                    
                    <label>Message / Issue</label>
                    <textarea placeholder="Write your message here..." style="height:120px;" required></textarea>
                    
                    <button type="submit">Submit Request</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="footer-links">
            <a href="/disclaimer">Disclaimer</a>
            <a href="/contact-us">Contact Us</a>
            <a href="/terms-and-conditions">Terms & Conditions</a>
            <a href="/privacy-policy">Privacy Policy</a>
        </div>
        <div class="footer-copyright">&copy; 2026 4kwax. All Rights Reserved.</div>
    </footer>

    <script>
        const _0x5a1e=["\x44\x4F\x4D\x43\x6F\x6E\x74\x65\x6E\x74\x4C\x6F\x61\x64\x65\x64","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x34\x6B\x77\x61\x78\x2E\x67\x69\x74\x68\x75\x62\x2E\x69\x6F","\x68\x6F\x73\x74\x6E\x61\x6D\x65","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x6C\x6F\x63\x61\x6C\x68\x6F\x73\x74","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x62\x6F\x64\x79","\x3C\x68\x31\x20\x73\x74\x79\x6C\x65\x3D\x27\x63\x6F\x6C\x6F\x72\x3A\x72\x65\x64\x3B\x74\x65\x78\x74\x2D\x61\x6C\x69\x67\x6E\x3A\x63\x65\x6E\x74\x65\x72\x3B\x6D\x61\x72\x67\x69\x6E\x2D\x74\x6F\x70\x3A\x32\x30\x76\x68\x3B\x27\x3E\x41\x63\x63\x65\x73\x73\x20\x44\x65\x6E\x69\x65\x64\x21\x20\x52\x65\x64\x69\x72\x65\x63\x74\x69\x6E\x67\x2E\x2E\x2E\x3C\x2F\x68\x31\x3E","\x72\x65\x70\x6C\x61\x63\x65","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x34\x6B\x77\x61\x78\x2E\x67\x69\x74\x68\x75\x62\x2E\x69\x6F","\x63\x6F\x6E\x74\x65\x78\x74\x6D\x65\x6E\x75","\x74\x61\x67\x4E\x61\x6D\x65","\x74\x61\x72\x67\x65\x74","\x49\x4D\x47","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x63\x6F\x70\x79","\x6F\x6E\x6B\x65\x79\x64\x6F\x77\x6E","\x63\x74\x72\x6C\x4B\x65\x79","\x6B\x65\x79\x43\x6F\x64\x65"];document[_0x5a1e[1]](_0x5a1e[0],function(){var _0x2b3c=_0x5a1e[2];if(window[_0x5a1e[4]][_0x5a1e[3]]!==_0x2b3c&&window[_0x5a1e[4]][_0x5a1e[3]]!==_0x5a1e[5]){document[_0x5a1e[7]][_0x5a1e[6]]=_0x5a1e[8];setTimeout(function(){window[_0x5a1e[4]][_0x5a1e[9]](_0x5a1e[10])},2000)}else{document[_0x5a1e[1]](_0x5a1e[11],function(_0x1x1){if(_0x1x1[_0x5a1e[13]][_0x5a1e[12]]!==_0x5a1e[14]){_0x1x1[_0x5a1e[15]]()}});document[_0x5a1e[1]](_0x5a1e[16],function(_0x1x1){_0x1x1[_0x5a1e[15]]()});document[_0x5a1e[17]]=function(_0x1x1){if(_0x1x1[_0x5a1e[18]]&&(_0x1x1[_0x5a1e[19]]===67||_0x1x1[_0x5a1e[19]]===85||_0x1x1[_0x5a1e[19]]===83||_0x1x1[_0x5a1e[19]]===73||_0x1x1[_0x5a1e[19]]===86)){return!1}}}});
    </script>
</body>
</html>
