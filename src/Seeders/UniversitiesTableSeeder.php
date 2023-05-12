<?php

namespace Tifoysal\BangladeshUniversities\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Tifoysal\BangladeshUniversities\Models\Universities;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $universities ='[
    {
        "rank": "15",
        "name": "Ahsanullah University of Science and Technology",
        "location": "Dhaka"
    },
    {
        "rank": "8",
        "name": "American International University-Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "119",
        "name": "Anwer Khan Modern University",
        "location": "Dhaka"
    },
    {
        "rank": "44",
        "name": "ASA University Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "12",
        "name": "Asian University for Women",
        "location": "Chittagong"
    },
    {
        "rank": "62",
        "name": "Asian University of Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "79",
        "name": "Atish Dipankar University of Science and Technology",
        "location": "Dhaka ..."
    },
    {
        "rank": "138",
        "name": "Bandarban University",
        "location": "Bandarban"
    },
    {
        "rank": "16",
        "name": "Bangabandhu Sheikh Mujib Medical University",
        "location": "Dhaka"
    },
    {
        "rank": "39",
        "name": "Bangabandhu Sheikh Mujibur Rahman Agricultural University",
        "location": "Gazipur"
    },
    {
        "rank": "68",
        "name": "Bangabandhu Sheikh Mujibur Rahman Maritime University",
        "location": "Dhaka"
    },
    {
        "rank": "43",
        "name": "Bangabandhu Sheikh Mujibur Rahman Science and Technology University",
        "location": "Gopalganj"
    },
    {
        "rank": "106",
        "name": "Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University",
        "location": "Melandaha"
    },
    {
        "rank": "14",
        "name": "Bangladesh Agricultural University",
        "location": "Mymensingh"
    },
    {
        "rank": "92",
        "name": "Bangladesh Islami University",
        "location": "Dhaka"
    },
    {
        "rank": "95",
        "name": "Bangladesh University",
        "location": "Dhaka"
    },
    {
        "rank": "30",
        "name": "Bangladesh University of Business and Technology",
        "location": "Dhaka"
    },
    {
        "rank": "4",
        "name": "Bangladesh University of Engineering and Technology",
        "location": "Dhaka"
    },
    {
        "rank": "122",
        "name": "Bangladesh University of Health Sciences",
        "location": "Dhaka"
    },
    {
        "rank": "22",
        "name": "Bangladesh University of Professionals",
        "location": "Mirpur"
    },
    {
        "rank": "64",
        "name": "Bangladesh University of Textiles",
        "location": "Dhaka"
    },
    {
        "rank": "84",
        "name": "Begum Gulchemonara Trust University",
        "location": "Chittagong"
    },
    {
        "rank": "45",
        "name": "Begum Rokeya University, Rangpur",
        "location": "Rangpur"
    },
    {
        "rank": "61",
        "name": "BGMEA University of Fashion and Technology",
        "location": "Dhaka"
    },
    {
        "rank": "1",
        "name": "BRAC University",
        "location": "Dhaka ..."
    },
    {
        "rank": "135",
        "name": "Britannia University",
        "location": "Comilla"
    },
    {
        "rank": "46",
        "name": "Canadian University of Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "128",
        "name": "CCN University of Science and Technology",
        "location": "Comilla"
    },
    {
        "rank": "127",
        "name": "Central University of Science and Technology",
        "location": "Dhaka"
    },
    {
        "rank": "114",
        "name": "Central Women\'s University",
        "location": "Dhaka"
    },
    {
        "rank": "86",
        "name": "Chittagong Independent University",
        "location": "Chittagong"
    },
    {
        "rank": "107",
        "name": "Chittagong Medical University",
        "location": "Chittagong"
    },
    {
        "rank": "32",
        "name": "Chittagong University of Engineering and Technology",
        "location": "Chittagong ..."
    },
    {
        "rank": "33",
        "name": "Chittagong Veterinary and Animal Sciences University",
        "location": "Kulshi"
    },
    {
        "rank": "87",
        "name": "City University",
        "location": "Dhaka"
    },
    {
        "rank": "49",
        "name": "Comilla University",
        "location": "Comilla"
    },
    {
        "rank": "133",
        "name": "Cox\'s Bazar International University",
        "location": "Cox\'s Bazar"
    },
    {
        "rank": "7",
        "name": "Daffodil International University",
        "location": "Dhaka"
    },
    {
        "rank": "52",
        "name": "Dhaka International University",
        "location": "Dhaka"
    },
    {
        "rank": "47",
        "name": "Dhaka University of Engineering and Technology",
        "location": "Gazipur"
    },
    {
        "rank": "71",
        "name": "East Delta University",
        "location": "Chittagong"
    },
    {
        "rank": "13",
        "name": "East West University",
        "location": "Dhaka"
    },
    {
        "rank": "57",
        "name": "Eastern University, Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "91",
        "name": "European University of Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "113",
        "name": "Exim Bank Agricultural University of Bangladesh",
        "location": "Chapainawabganj"
    },
    {
        "rank": "108",
        "name": "Fareast International University",
        "location": "Dhaka"
    },
    {
        "rank": "120",
        "name": "Feni University",
        "location": "Feni"
    },
    {
        "rank": "83",
        "name": "First Capital University of Bangladesh",
        "location": "Chuadanga"
    },
    {
        "rank": "102",
        "name": "German University Bangladesh",
        "location": "Gazipur ..."
    },
    {
        "rank": "132",
        "name": "Global University Bangladesh",
        "location": "Barisal"
    },
    {
        "rank": "89",
        "name": "Gono Bishwabidyalay",
        "location": "Dhaka"
    },
    {
        "rank": "28",
        "name": "Green University of Bangladesh",
        "location": "Dhaka ..."
    },
    {
        "rank": "40",
        "name": "Hajee Mohammad Danesh Science and Technology University",
        "location": "Dinajpur"
    },
    {
        "rank": "103",
        "name": "Hamdard University of Bangladesh",
        "location": "Munshiganj"
    },
    {
        "rank": "98",
        "name": "IBAIS University",
        "location": "Dhaka"
    },
    {
        "rank": "9",
        "name": "Independent University, Bangladesh",
        "location": "Dhaka ..."
    },
    {
        "rank": "17",
        "name": "International Islamic University, Chittagong",
        "location": "Chittagong"
    },
    {
        "rank": "126",
        "name": "International Standard University",
        "location": "Dhaka"
    },
    {
        "rank": "31",
        "name": "International University of Business Agriculture and Technology",
        "location": "Dhaka"
    },
    {
        "rank": "130",
        "name": "Ishakha International University, Bangladesh",
        "location": "Kishorganj"
    },
    {
        "rank": "69",
        "name": "Islamic Arabic University",
        "location": "Dhaka"
    },
    {
        "rank": "38",
        "name": "Islamic University",
        "location": "Kushtia"
    },
    {
        "rank": "27",
        "name": "Islamic University of Technology",
        "location": "Gazipur"
    },
    {
        "rank": "35",
        "name": "Jagannath University",
        "location": "Dhaka"
    },
    {
        "rank": "18",
        "name": "Jahangirnagar University",
        "location": "Savar"
    },
    {
        "rank": "58",
        "name": "Jatiya Kabi Kazi Nazrul Islam University",
        "location": "Mymensingh"
    },
    {
        "rank": "41",
        "name": "Jessore University of Science and Technology",
        "location": "Jessore"
    },
    {
        "rank": "121",
        "name": "Khulna Agricultural University",
        "location": "Khulna"
    },
    {
        "rank": "26",
        "name": "Khulna University",
        "location": "Khulna"
    },
    {
        "rank": "19",
        "name": "Khulna University of Engineering and Technology",
        "location": "Khulna"
    },
    {
        "rank": "123",
        "name": "Khwaja Yunus Ali University",
        "location": "Enayetpur"
    },
    {
        "rank": "66",
        "name": "Leading University",
        "location": "Sylhet"
    },
    {
        "rank": "63",
        "name": "Manarat International University",
        "location": "Dhaka"
    },
    {
        "rank": "54",
        "name": "Mawlana Bhashani Science and Technology University",
        "location": "Tangail"
    },
    {
        "rank": "70",
        "name": "Metropolitan University",
        "location": "Sylhet"
    },
    {
        "rank": "137",
        "name": "N.P.I. University of Bangladesh",
        "location": "Manikgonj"
    },
    {
        "rank": "5",
        "name": "National University, Bangladesh",
        "location": "Gazipur"
    },
    {
        "rank": "21",
        "name": "Noakhali Science and Technology University",
        "location": "Noakhali"
    },
    {
        "rank": "125",
        "name": "North Bengal International University",
        "location": "Rajshahi"
    },
    {
        "rank": "110",
        "name": "North East University Bangladesh",
        "location": "Sylhet"
    },
    {
        "rank": "2",
        "name": "North South University",
        "location": "Dhaka"
    },
    {
        "rank": "101",
        "name": "North Western University",
        "location": "Khulna"
    },
    {
        "rank": "55",
        "name": "Northern University of Bangladesh",
        "location": "Dhaka ..."
    },
    {
        "rank": "105",
        "name": "Northern University of Business and Technology, Khulna",
        "location": "Khulna"
    },
    {
        "rank": "78",
        "name": "Notre Dame University Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "56",
        "name": "Pabna Science and Technology University",
        "location": "Pabna"
    },
    {
        "rank": "53",
        "name": "Patuakhali Science and Technology University",
        "location": "Patuakhali ..."
    },
    {
        "rank": "96",
        "name": "Port City International University",
        "location": "Chittagong"
    },
    {
        "rank": "90",
        "name": "Premier University",
        "location": "Chittagong"
    },
    {
        "rank": "75",
        "name": "Presidency University, Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "80",
        "name": "Prime University",
        "location": "Dhaka"
    },
    {
        "rank": "48",
        "name": "Primeasia University",
        "location": "Dhaka"
    },
    {
        "rank": "124",
        "name": "Pundra University of Science and Technology",
        "location": "Bogra"
    },
    {
        "rank": "104",
        "name": "Queens University",
        "location": "Dhaka"
    },
    {
        "rank": "116",
        "name": "Rabindra Maitree University",
        "location": "Kushtia"
    },
    {
        "rank": "72",
        "name": "Rabindra University, Bangladesh",
        "location": "Shahjadpur"
    },
    {
        "rank": "115",
        "name": "Rajshahi Medical University",
        "location": "Rajshahi"
    },
    {
        "rank": "131",
        "name": "Rajshahi Science and Technology University",
        "location": "Natore"
    },
    {
        "rank": "6",
        "name": "Rajshahi University",
        "location": "Rajshahi"
    },
    {
        "rank": "36",
        "name": "Rajshahi University of Engineering and Technology",
        "location": "Rajshahi"
    },
    {
        "rank": "118",
        "name": "Ranada Prasad Shaha University",
        "location": "Narayanganj"
    },
    {
        "rank": "100",
        "name": "Rangamati Science and Technology University",
        "location": "Rangamati"
    },
    {
        "rank": "99",
        "name": "Royal University of Dhaka",
        "location": "Dhaka ..."
    },
    {
        "rank": "10",
        "name": "Shahjalal University of Science and Technology",
        "location": "Sylhet"
    },
    {
        "rank": "88",
        "name": "Shanto Mariam University of Creative Technology",
        "location": "Dhaka"
    },
    {
        "rank": "34",
        "name": "Sheikh Fazilatunnesa Mujib University",
        "location": "Jamalpur"
    },
    {
        "rank": "42",
        "name": "Sheikh Hasina University",
        "location": "Netrokona"
    },
    {
        "rank": "60",
        "name": "Sher-e-Bangla Agricultural University",
        "location": "Dhaka"
    },
    {
        "rank": "67",
        "name": "Sonargaon University",
        "location": "Dhaka ..."
    },
    {
        "rank": "37",
        "name": "Southeast University, Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "65",
        "name": "Southern University Bangladesh",
        "location": "Chittagong"
    },
    {
        "rank": "25",
        "name": "Stamford University Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "76",
        "name": "State University of Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "50",
        "name": "Sylhet Agricultural University",
        "location": "Sylhet ..."
    },
    {
        "rank": "93",
        "name": "Sylhet International University",
        "location": "Sylhet"
    },
    {
        "rank": "129",
        "name": "Sylhet Medical University",
        "location": "Sylhet"
    },
    {
        "rank": "112",
        "name": "The International University of Scholars",
        "location": "Dhaka"
    },
    {
        "rank": "109",
        "name": "The Millenium University",
        "location": "Dhaka"
    },
    {
        "rank": "111",
        "name": "The People\'s University of Bangladesh",
        "location": "Dhaka ..."
    },
    {
        "rank": "136",
        "name": "Times University of Bangladesh",
        "location": "Faridpur"
    },
    {
        "rank": "11",
        "name": "United International University",
        "location": "Dhaka"
    },
    {
        "rank": "29",
        "name": "University of Asia Pacific",
        "location": "Dhaka"
    },
    {
        "rank": "24",
        "name": "University of Barisal",
        "location": "Barisal"
    },
    {
        "rank": "20",
        "name": "University of Chittagong",
        "location": "Chittagong"
    },
    {
        "rank": "85",
        "name": "University of Creative Technology, Chittagong",
        "location": "Chittagong"
    },
    {
        "rank": "81",
        "name": "University of Development Alternative",
        "location": "Dhaka"
    },
    {
        "rank": "3",
        "name": "University of Dhaka",
        "location": "Dhaka ..."
    },
    {
        "rank": "73",
        "name": "University of Global Village",
        "location": "Barishal"
    },
    {
        "rank": "77",
        "name": "University of Information Technology and Sciences",
        "location": "Dhaka"
    },
    {
        "rank": "23",
        "name": "University of Liberal Arts Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "51",
        "name": "University of Science and Technology Chittagong",
        "location": "Chittagong ..."
    },
    {
        "rank": "94",
        "name": "University of South Asia, Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "74",
        "name": "Uttara University",
        "location": "Dhaka"
    },
    {
        "rank": "82",
        "name": "Varendra University",
        "location": "Rajshahi"
    },
    {
        "rank": "97",
        "name": "Victoria University of Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "59",
        "name": "World University of Bangladesh",
        "location": "Dhaka"
    },
    {
        "rank": "134",
        "name": "Z.H. Sikder University of Science and Technology",
        "location": "Bhedorgonj"
    },
    {
        "rank": "117",
        "name": "ZNRF University of Management Sciences",
        "location": "Dhaka"
    }
]';
        foreach (json_decode($universities,true) as $data)
        {

            Universities::create([
                'name' => $data['name'],
                'rank' => $data['rank'],
                'location' => $data['location'],
            ]);
        }

    }
}
