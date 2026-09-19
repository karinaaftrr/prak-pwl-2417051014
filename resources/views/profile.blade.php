<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile</title>

    <!-- Google Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;

            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            background:
                linear-gradient(
                    135deg,
                    #071a36 0%,
                    #0b2a55 40%,
                    #123f7a 70%,
                    #06152d 100%
                );

            padding: 30px;
        }


        .profile-card {
            width: 390px;
            height: auto;

            padding: 42px 38px;

            text-align: center;

            background: rgba(255, 255, 255, 0.10);

            border: 1px solid rgba(255, 255, 255, 0.20);

            border-radius: 28px;

            box-shadow:
                0 25px 60px rgba(0, 0, 0, 0.40),
                inset 0 1px 1px rgba(255, 255, 255, 0.15);

            backdrop-filter: blur(18px);

            -webkit-backdrop-filter: blur(18px);
        }


        /* FOTO */

        .profile-image {
            width: 145px;
            height: 145px;

            object-fit: cover;

            border-radius: 50%;

            border: 5px solid rgba(255, 255, 255, 0.95);

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.40);

            margin-bottom: 22px;
        }


        /* JUDUL */

        .profile-title {
            color: white;

            font-size: 26px;

            font-weight: 600;

            letter-spacing: 0.5px;

            margin-bottom: 28px;
        }


        /* KOTAK DATA */

        .data-box {
            width: 100%;

            text-align: left;

            background: rgba(255, 255, 255, 0.95);

            margin: 13px 0;

            padding: 15px 20px;

            border-radius: 13px;

            box-shadow:
                0 7px 20px rgba(0, 0, 0, 0.18);

            transition: all 0.3s ease;
        }


        /* EFEK HOVER */

        .data-box:hover {
            transform: translateY(-4px);

            box-shadow:
                0 12px 25px rgba(0, 0, 0, 0.28);
        }


        /* LABEL */

        .label {
            font-size: 11px;

            font-weight: 500;

            color: #64748b;

            letter-spacing: 1px;

            margin-bottom: 3px;
        }


        /* ISI DATA */

        .value {
            font-size: 16px;

            font-weight: 600;

            color: #102f5f;

            word-break: break-word;
        }


        /* FOOTER */

        .footer {
            margin-top: 27px;

            color: rgba(255, 255, 255, 0.75);

            font-size: 12px;

            font-weight: 400;

            letter-spacing: 0.3px;
        }

    </style>

</head>


<body>

    <div class="profile-card">


        <!-- FOTO PROFILE -->

        <img
            src="{{ asset('Karina.jpeg') }}"
            alt="Foto Profile"
            class="profile-image"
        >


        <!-- JUDUL -->

        <div class="profile-title">
            My Profile
        </div>


        <!-- NAMA -->

        <div class="data-box">

            <div class="label">
                NAMA
            </div>

            <div class="value">
                {{ $nama }}
            </div>

        </div>


        <!-- KELAS -->

        <div class="data-box">

            <div class="label">
                KELAS
            </div>

            <div class="value">
                {{ $kelas }}
            </div>

        </div>


        <!-- NPM -->

        <div class="data-box">

            <div class="label">
                NPM
            </div>

            <div class="value">
                {{ $npm }}
            </div>

        </div>


        <!-- FOOTER -->

        <div class="footer">
            Mahasiswa Ilmu Komputer
        </div>


    </div>

</body>

</html>