<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;

class CardSeeder extends Seeder
{
    public function run(): void
    {
        $cards = [
            [
                'name' => 'The Fool',
                'arcana' => 'major',
                'upright_meaning' => 'Awal baru, spontanitas, petualangan, dan jiwa bebas. Saatnya melangkah dengan keyakinan.',
                'reversed_meaning' => 'Ceroboh, mengambil risiko tanpa perhitungan, keputusan tergesa-gesa.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/90/RWS_Tarot_00_Fool.jpg',
                'action_do' => 'Ambil risiko yang terukur, cobalah hal baru hari ini, dan percayai instingmu.',
                'action_avoid' => 'Hindari overthinking dan keraguan yang berlebihan sebelum melangkah.'
            ],
            [
                'name' => 'The Magician',
                'arcana' => 'major',
                'upright_meaning' => 'Kekuatan, kemampuan, dan keinginan. Kamu memiliki semua yang dibutuhkan untuk sukses.',
                'reversed_meaning' => 'Manipulasi, kemampuan yang tidak dimanfaatkan, rencana yang tidak terlaksana.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/d/de/RWS_Tarot_01_Magician.jpg',
                'action_do' => 'Fokus pada tujuanmu, gunakan semua sumber daya dan bakat yang kamu miliki sekarang.',
                'action_avoid' => 'Jangan menunda-nunda rencana penting atau meremehkan kemampuan dirimu sendiri.'
            ],
            [
                'name' => 'The High Priestess',
                'arcana' => 'major',
                'upright_meaning' => 'Intuisi, misteri, dan kebijaksanaan batin. Percayai perasaan terdalammu.',
                'reversed_meaning' => 'Rahasia tersembunyi, menarik diri, dan mengabaikan suara hati.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/RWS_Tarot_02_High_Priestess.jpg',
                'action_do' => 'Luangkan waktu untuk meditasi atau refleksi diri. Dengarkan suara hatimu.',
                'action_avoid' => 'Hindari mengambil keputusan besar hanya berdasarkan logika tanpa melibatkan insting.'
            ],
            [
                'name' => 'The Empress',
                'arcana' => 'major',
                'upright_meaning' => 'Kesuburan, kelimpahan, kecantikan, dan alam. Periode pertumbuhan dan kreativitas.',
                'reversed_meaning' => 'Ketergantungan, mengabaikan diri sendiri, kreativitas yang terhambat.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/d/d2/RWS_Tarot_03_Empress.jpg',
                'action_do' => 'Rawat diri sendiri (self-care), nikmati keindahan di sekitarmu, dan kembangkan ide kreatifmu.',
                'action_avoid' => 'Jangan terlalu keras pada dirimu sendiri atau mengabaikan kebutuhan emosionalmu.'
            ],
            [
                'name' => 'The Emperor',
                'arcana' => 'major',
                'upright_meaning' => 'Otoritas, struktur, dan stabilitas. Ambil kendali dan tegakkan keteraturan.',
                'reversed_meaning' => 'Dominasi berlebihan, kekakuan, dan kurangnya disiplin.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/c/c3/RWS_Tarot_04_Emperor.jpg',
                'action_do' => 'Buat jadwal yang terstruktur, buat keputusan yang tegas, dan pimpin dengan bijak.',
                'action_avoid' => 'Hindari sikap terlalu kaku, otoriter, atau menolak masukan dari orang lain.'
            ],
            [
                'name' => 'The Hierophant',
                'arcana' => 'major',
                'upright_meaning' => 'Tradisi, konformitas, dan keyakinan spiritual. Ikuti jalan yang sudah terbukti.',
                'reversed_meaning' => 'Pemberontakan, subversif, dan mempertanyakan norma.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/8d/RWS_Tarot_05_Hierophant.jpg',
                'action_do' => 'Ikuti aturan atau pedoman yang ada, cari nasihat dari mentor atau ahlinya.',
                'action_avoid' => 'Hari ini bukan waktu yang tepat untuk memberontak atau melanggar prosedur standar.'
            ],
            [
                'name' => 'The Lovers',
                'arcana' => 'major',
                'upright_meaning' => 'Cinta, harmoni, dan pilihan penting. Hubungan yang bermakna menanti.',
                'reversed_meaning' => 'Ketidakseimbangan, ketidakselarasan, dan pilihan yang buruk dalam hubungan.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/8d/RWS-06-thelovers.jpg',
                'action_do' => 'Bangun komunikasi yang baik dengan partner/pasangan, buat pilihan yang selaras dengan nilai-nilaimu.',
                'action_avoid' => 'Hindari membuat komitmen yang tidak sepenuhnya kamu yakini atau abaikan komunikasi.'
            ],
            [
                'name' => 'The Chariot',
                'arcana' => 'major',
                'upright_meaning' => 'Kontrol, kemauan keras, dan kemenangan. Fokus dan tekad membawamu ke tujuan.',
                'reversed_meaning' => 'Kurang kontrol diri, agresi, dan hambatan yang menghalangi kemajuan.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/9/9b/RWS_Tarot_07_Chariot.jpg',
                'action_do' => 'Tetap fokus, kendalikan emosimu, dan hadapi tantangan dengan tekad bulat.',
                'action_avoid' => 'Jangan biarkan gangguan kecil membuatmu kehilangan fokus dari tujuan utamamu.'
            ],
            [
                'name' => 'Strength',
                'arcana' => 'major',
                'upright_meaning' => 'Kekuatan batin, kesabaran, dan pengaruh halus. Hadapi tantangan dengan ketenangan.',
                'reversed_meaning' => 'Keraguan diri, kelemahan batin, dan kurangnya kepercayaan diri.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/f/f5/RWS_Tarot_08_Strength.jpg',
                'action_do' => 'Bersabar dalam menghadapi orang atau situasi sulit, gunakan pendekatan lembut namun tegas.',
                'action_avoid' => 'Hindari marah yang meledak-ledak atau menggunakan kekerasan/paksaan untuk menyelesaikan masalah.'
            ],
            [
                'name' => 'The Hermit',
                'arcana' => 'major',
                'upright_meaning' => 'Pencarian jiwa, introspeksi, dan kesendirian. Temukan jawaban dari dalam dirimu.',
                'reversed_meaning' => 'Isolasi, kesepian, dan menarik diri dari dunia secara berlebihan.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/4/4d/RWS_Tarot_09_Hermit.jpg',
                'action_do' => 'Ambil waktu untuk menyendiri, evaluasi kembali jalan hidupmu, dan kurangi interaksi sosial yang tidak perlu.',
                'action_avoid' => 'Hindari keramaian atau mengambil keputusan impulsif tanpa perenungan mendalam.'
            ],
        ];

        foreach ($cards as $card) {
            Card::create($card);
        }

    }
}