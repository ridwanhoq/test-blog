<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'id' => 1,
                'sort' => 'AF',
                'country_name' => 'Afghanistan',
                'phoneCode' => 93
            ],
            [
                'id' => 2,
                'sort' => 'AL',
                'country_name' => 'Albania',
                'phoneCode' => 355
            ],
            [
                'id' => 3,
                'sort' => 'DZ',
                'country_name' => 'Algeria',
                'phoneCode' => 213
            ],
            [
                'id' => 4,
                'sort' => 'AS',
                'country_name' => 'American Samoa',
                'phoneCode' => 1684
            ],
            [
                'id' => 5,
                'sort' => 'AD',
                'country_name' => 'Andorra',
                'phoneCode' => 376
            ],
            [
                'id' => 6,
                'sort' => 'AO',
                'country_name' => 'Angola',
                'phoneCode' => 244
            ],
            [
                'id' => 7,
                'sort' => 'AI',
                'country_name' => 'Anguilla',
                'phoneCode' => 1264
            ],
            [
                'id' => 8,
                'sort' => 'AQ',
                'country_name' => 'Antarctica',
                'phoneCode' => 0
            ],
            [
                'id' => 9,
                'sort' => 'AG',
                'country_name' => 'Antigua And Barbuda',
                'phoneCode' => 1268
            ],
            [
                'id' => 10,
                'sort' => 'AR',
                'country_name' => 'Argentina',
                'phoneCode' => 54
            ],
            [
                'id' => 11,
                'sort' => 'AM',
                'country_name' => 'Armenia',
                'phoneCode' => 374
            ],
            [
                'id' => 12,
                'sort' => 'AW',
                'country_name' => 'Aruba',
                'phoneCode' => 297
            ],
            [
                'id' => 13,
                'sort' => 'AU',
                'country_name' => 'Australia',
                'phoneCode' => 61
            ],
            [
                'id' => 14,
                'sort' => 'AT',
                'country_name' => 'Austria',
                'phoneCode' => 43
            ],
            [
                'id' => 15,
                'sort' => 'AZ',
                'country_name' => 'Azerbaijan',
                'phoneCode' => 994
            ],
            [
                'id' => 16,
                'sort' => 'BS',
                'country_name' => 'Bahamas The',
                'phoneCode' => 1242
            ],
            [
                'id' => 17,
                'sort' => 'BH',
                'country_name' => 'Bahrain',
                'phoneCode' => 973
            ],
            [
                'id' => 18,
                'sort' => 'BD',
                'country_name' => 'Bangladesh',
                'phoneCode' => 880
            ],
            [
                'id' => 19,
                'sort' => 'BB',
                'country_name' => 'Barbados',
                'phoneCode' => 1246
            ],
            [
                'id' => 20,
                'sort' => 'BY',
                'country_name' => 'Belarus',
                'phoneCode' => 375
            ],
            [
                'id' => 21,
                'sort' => 'BE',
                'country_name' => 'Belgium',
                'phoneCode' => 32
            ],
            [
                'id' => 22,
                'sort' => 'BZ',
                'country_name' => 'Belize',
                'phoneCode' => 501
            ],
            [
                'id' => 23,
                'sort' => 'BJ',
                'country_name' => 'Benin',
                'phoneCode' => 229
            ],
            [
                'id' => 24,
                'sort' => 'BM',
                'country_name' => 'Bermuda',
                'phoneCode' => 1441
            ],
            [
                'id' => 25,
                'sort' => 'BT',
                'country_name' => 'Bhutan',
                'phoneCode' => 975
            ],
            [
                'id' => 26,
                'sort' => 'BO',
                'country_name' => 'Bolivia',
                'phoneCode' => 591
            ],
            [
                'id' => 27,
                'sort' => 'BA',
                'country_name' => 'Bosnia and Herzegovina',
                'phoneCode' => 387
            ],
            [
                'id' => 28,
                'sort' => 'BW',
                'country_name' => 'Botswana',
                'phoneCode' => 267
            ],
            [
                'id' => 29,
                'sort' => 'BV',
                'country_name' => 'Bouvet Island',
                'phoneCode' => 0
            ],
            [
                'id' => 30,
                'sort' => 'BR',
                'country_name' => 'Brazil',
                'phoneCode' => 55
            ],
            [
                'id' => 31,
                'sort' => 'IO',
                'country_name' => 'British Indian Ocean Territory',
                'phoneCode' => 246
            ],
            [
                'id' => 32,
                'sort' => 'BN',
                'country_name' => 'Brunei',
                'phoneCode' => 673
            ],
            [
                'id' => 33,
                'sort' => 'BG',
                'country_name' => 'Bulgaria',
                'phoneCode' => 359
            ],
            [
                'id' => 34,
                'sort' => 'BF',
                'country_name' => 'Burkina Faso',
                'phoneCode' => 226
            ],
            [
                'id' => 35,
                'sort' => 'BI',
                'country_name' => 'Burundi',
                'phoneCode' => 257
            ],
            [
                'id' => 36,
                'sort' => 'KH',
                'country_name' => 'Cambodia',
                'phoneCode' => 855
            ],
            [
                'id' => 37,
                'sort' => 'CM',
                'country_name' => 'Cameroon',
                'phoneCode' => 237
            ],
            [
                'id' => 38,
                'sort' => 'CA',
                'country_name' => 'Canada',
                'phoneCode' => 1
            ],
            [
                'id' => 39,
                'sort' => 'CV',
                'country_name' => 'Cape Verde',
                'phoneCode' => 238
            ],
            [
                'id' => 40,
                'sort' => 'KY',
                'country_name' => 'Cayman Islands',
                'phoneCode' => 1345
            ],
            [
                'id' => 41,
                'sort' => 'CF',
                'country_name' => 'Central African Republic',
                'phoneCode' => 236
            ],
            [
                'id' => 42,
                'sort' => 'TD',
                'country_name' => 'Chad',
                'phoneCode' => 235
            ],
            [
                'id' => 43,
                'sort' => 'CL',
                'country_name' => 'Chile',
                'phoneCode' => 56
            ],
            [
                'id' => 44,
                'sort' => 'CN',
                'country_name' => 'China',
                'phoneCode' => 86
            ],
            [
                'id' => 45,
                'sort' => 'CX',
                'country_name' => 'Christmas Island',
                'phoneCode' => 61
            ],
            [
                'id' => 46,
                'sort' => 'CC',
                'country_name' => 'Cocos (Keeling) Islands',
                'phoneCode' => 672
            ],
            [
                'id' => 47,
                'sort' => 'CO',
                'country_name' => 'Colombia',
                'phoneCode' => 57
            ],
            [
                'id' => 48,
                'sort' => 'KM',
                'country_name' => 'Comoros',
                'phoneCode' => 269
            ],
            [
                'id' => 49,
                'sort' => 'CG',
                'country_name' => 'Republic Of The Congo',
                'phoneCode' => 242
            ],
            [
                'id' => 50,
                'sort' => 'CD',
                'country_name' => 'Democratic Republic Of The Congo',
                'phoneCode' => 242
            ],
            [
                'id' => 51,
                'sort' => 'CK',
                'country_name' => 'Cook Islands',
                'phoneCode' => 682
            ],
            [
                'id' => 52,
                'sort' => 'CR',
                'country_name' => 'Costa Rica',
                'phoneCode' => 506
            ],
            [
                'id' => 53,
                'sort' => 'CI',
                'country_name' => 'Cote D Ivoire (Ivory Coast)',
                'phoneCode' => 225
            ],
            [
                'id' => 54,
                'sort' => 'HR',
                'country_name' => 'Croatia (Hrvatska)',
                'phoneCode' => 385
            ],
            [
                'id' => 55,
                'sort' => 'CU',
                'country_name' => 'Cuba',
                'phoneCode' => 53
            ],
            [
                'id' => 56,
                'sort' => 'CY',
                'country_name' => 'Cyprus',
                'phoneCode' => 357
            ],
            [
                'id' => 57,
                'sort' => 'CZ',
                'country_name' => 'Czech Republic',
                'phoneCode' => 420
            ],
            [
                'id' => 58,
                'sort' => 'DK',
                'country_name' => 'Denmark',
                'phoneCode' => 45
            ],
            [
                'id' => 59,
                'sort' => 'DJ',
                'country_name' => 'Djibouti',
                'phoneCode' => 253
            ],
            [
                'id' => 60,
                'sort' => 'DM',
                'country_name' => 'Dominica',
                'phoneCode' => 1767
            ],
            [
                'id' => 61,
                'sort' => 'DO',
                'country_name' => 'Dominican Republic',
                'phoneCode' => 1809
            ],
            [
                'id' => 62,
                'sort' => 'TP',
                'country_name' => 'East Timor',
                'phoneCode' => 670
            ],
            [
                'id' => 63,
                'sort' => 'EC',
                'country_name' => 'Ecuador',
                'phoneCode' => 593
            ],
            [
                'id' => 64,
                'sort' => 'EG',
                'country_name' => 'Egypt',
                'phoneCode' => 20
            ],
            [
                'id' => 65,
                'sort' => 'SV',
                'country_name' => 'El Salvador',
                'phoneCode' => 503
            ],
            [
                'id' => 66,
                'sort' => 'GQ',
                'country_name' => 'Equatorial Guinea',
                'phoneCode' => 240
            ],
            [
                'id' => 67,
                'sort' => 'ER',
                'country_name' => 'Eritrea',
                'phoneCode' => 291
            ],
            [
                'id' => 68,
                'sort' => 'EE',
                'country_name' => 'Estonia',
                'phoneCode' => 372
            ],
            [
                'id' => 69,
                'sort' => 'ET',
                'country_name' => 'Ethiopia',
                'phoneCode' => 251
            ],
            [
                'id' => 70,
                'sort' => 'XA',
                'country_name' => 'External Territories of Australia',
                'phoneCode' => 61
            ],
            [
                'id' => 71,
                'sort' => 'FK',
                'country_name' => 'Falkland Islands',
                'phoneCode' => 500
            ],
            [
                'id' => 72,
                'sort' => 'FO',
                'country_name' => 'Faroe Islands',
                'phoneCode' => 298
            ],
            [
                'id' => 73,
                'sort' => 'FJ',
                'country_name' => 'Fiji Islands',
                'phoneCode' => 679
            ],
            [
                'id' => 74,
                'sort' => 'FI',
                'country_name' => 'Finland',
                'phoneCode' => 358
            ],
            [
                'id' => 75,
                'sort' => 'FR',
                'country_name' => 'France',
                'phoneCode' => 33
            ],
            [
                'id' => 76,
                'sort' => 'GF',
                'country_name' => 'French Guiana',
                'phoneCode' => 594
            ],
            [
                'id' => 77,
                'sort' => 'PF',
                'country_name' => 'French Polynesia',
                'phoneCode' => 689
            ],
            [
                'id' => 78,
                'sort' => 'TF',
                'country_name' => 'French Southern Territories',
                'phoneCode' => 0
            ],
            [
                'id' => 79,
                'sort' => 'GA',
                'country_name' => 'Gabon',
                'phoneCode' => 241
            ],
            [
                'id' => 80,
                'sort' => 'GM',
                'country_name' => 'Gambia The',
                'phoneCode' => 220
            ],
            [
                'id' => 81,
                'sort' => 'GE',
                'country_name' => 'Georgia',
                'phoneCode' => 995
            ],
            [
                'id' => 82,
                'sort' => 'DE',
                'country_name' => 'Germany',
                'phoneCode' => 49
            ],
            [
                'id' => 83,
                'sort' => 'GH',
                'country_name' => 'Ghana',
                'phoneCode' => 233
            ],
            [
                'id' => 84,
                'sort' => 'GI',
                'country_name' => 'Gibraltar',
                'phoneCode' => 350
            ],
            [
                'id' => 85,
                'sort' => 'GR',
                'country_name' => 'Greece',
                'phoneCode' => 30
            ],
            [
                'id' => 86,
                'sort' => 'GL',
                'country_name' => 'Greenland',
                'phoneCode' => 299
            ],
            [
                'id' => 87,
                'sort' => 'GD',
                'country_name' => 'Grenada',
                'phoneCode' => 1473
            ],
            [
                'id' => 88,
                'sort' => 'GP',
                'country_name' => 'Guadeloupe',
                'phoneCode' => 590
            ],
            [
                'id' => 89,
                'sort' => 'GU',
                'country_name' => 'Guam',
                'phoneCode' => 1671
            ],
            [
                'id' => 90,
                'sort' => 'GT',
                'country_name' => 'Guatemala',
                'phoneCode' => 502
            ],
            [
                'id' => 91,
                'sort' => 'XU',
                'country_name' => 'Guernsey and Alderney',
                'phoneCode' => 44
            ],
            [
                'id' => 92,
                'sort' => 'GN',
                'country_name' => 'Guinea',
                'phoneCode' => 224
            ],
            [
                'id' => 93,
                'sort' => 'GW',
                'country_name' => 'Guinea-Bissau',
                'phoneCode' => 245
            ],
            [
                'id' => 94,
                'sort' => 'GY',
                'country_name' => 'Guyana',
                'phoneCode' => 592
            ],
            [
                'id' => 95,
                'sort' => 'HT',
                'country_name' => 'Haiti',
                'phoneCode' => 509
            ],
            [
                'id' => 96,
                'sort' => 'HM',
                'country_name' => 'Heard and McDonald Islands',
                'phoneCode' => 0
            ],
            [
                'id' => 97,
                'sort' => 'HN',
                'country_name' => 'Honduras',
                'phoneCode' => 504
            ],
            [
                'id' => 98,
                'sort' => 'HK',
                'country_name' => 'Hong Kong S.A.R.',
                'phoneCode' => 852
            ],
            [
                'id' => 99,
                'sort' => 'HU',
                'country_name' => 'Hungary',
                'phoneCode' => 36
            ],
            [
                'id' => 100,
                'sort' => 'IS',
                'country_name' => 'Iceland',
                'phoneCode' => 354
            ],
            [
                'id' => 101,
                'sort' => 'IN',
                'country_name' => 'India',
                'phoneCode' => 91
            ],
            [
                'id' => 102,
                'sort' => 'id',
                'country_name' => 'Indonesia',
                'phoneCode' => 62
            ],
            [
                'id' => 103,
                'sort' => 'IR',
                'country_name' => 'Iran',
                'phoneCode' => 98
            ],
            [
                'id' => 104,
                'sort' => 'IQ',
                'country_name' => 'Iraq',
                'phoneCode' => 964
            ],
            [
                'id' => 105,
                'sort' => 'IE',
                'country_name' => 'Ireland',
                'phoneCode' => 353
            ],
            [
                'id' => 106,
                'sort' => 'IL',
                'country_name' => 'Israel',
                'phoneCode' => 972
            ],
            [
                'id' => 107,
                'sort' => 'IT',
                'country_name' => 'Italy',
                'phoneCode' => 39
            ],
            [
                'id' => 108,
                'sort' => 'JM',
                'country_name' => 'Jamaica',
                'phoneCode' => 1876
            ],
            [
                'id' => 109,
                'sort' => 'JP',
                'country_name' => 'Japan',
                'phoneCode' => 81
            ],
            [
                'id' => 110,
                'sort' => 'XJ',
                'country_name' => 'Jersey',
                'phoneCode' => 44
            ],
            [
                'id' => 111,
                'sort' => 'JO',
                'country_name' => 'Jordan',
                'phoneCode' => 962
            ],
            [
                'id' => 112,
                'sort' => 'KZ',
                'country_name' => 'Kazakhstan',
                'phoneCode' => 7
            ],
            [
                'id' => 113,
                'sort' => 'KE',
                'country_name' => 'Kenya',
                'phoneCode' => 254
            ],
            [
                'id' => 114,
                'sort' => 'KI',
                'country_name' => 'Kiribati',
                'phoneCode' => 686
            ],
            [
                'id' => 115,
                'sort' => 'KP',
                'country_name' => 'Korea North',
                'phoneCode' => 850
            ],
            [
                'id' => 116,
                'sort' => 'KR',
                'country_name' => 'Korea South',
                'phoneCode' => 82
            ],
            [
                'id' => 117,
                'sort' => 'KW',
                'country_name' => 'Kuwait',
                'phoneCode' => 965
            ],
            [
                'id' => 118,
                'sort' => 'KG',
                'country_name' => 'Kyrgyzstan',
                'phoneCode' => 996
            ],
            [
                'id' => 119,
                'sort' => 'LA',
                'country_name' => 'Laos',
                'phoneCode' => 856
            ],
            [
                'id' => 120,
                'sort' => 'LV',
                'country_name' => 'Latvia',
                'phoneCode' => 371
            ],
            [
                'id' => 121,
                'sort' => 'LB',
                'country_name' => 'Lebanon',
                'phoneCode' => 961
            ],
            [
                'id' => 122,
                'sort' => 'LS',
                'country_name' => 'Lesotho',
                'phoneCode' => 266
            ],
            [
                'id' => 123,
                'sort' => 'LR',
                'country_name' => 'Liberia',
                'phoneCode' => 231
            ],
            [
                'id' => 124,
                'sort' => 'LY',
                'country_name' => 'Libya',
                'phoneCode' => 218
            ],
            [
                'id' => 125,
                'sort' => 'LI',
                'country_name' => 'Liechtenstein',
                'phoneCode' => 423
            ],
            [
                'id' => 126,
                'sort' => 'LT',
                'country_name' => 'Lithuania',
                'phoneCode' => 370
            ],
            [
                'id' => 127,
                'sort' => 'LU',
                'country_name' => 'Luxembourg',
                'phoneCode' => 352
            ],
            [
                'id' => 128,
                'sort' => 'MO',
                'country_name' => 'Macau S.A.R.',
                'phoneCode' => 853
            ],
            [
                'id' => 129,
                'sort' => 'MK',
                'country_name' => 'Macedonia',
                'phoneCode' => 389
            ],
            [
                'id' => 130,
                'sort' => 'MG',
                'country_name' => 'Madagascar',
                'phoneCode' => 261
            ],
            [
                'id' => 131,
                'sort' => 'MW',
                'country_name' => 'Malawi',
                'phoneCode' => 265
            ],
            [
                'id' => 132,
                'sort' => 'MY',
                'country_name' => 'Malaysia',
                'phoneCode' => 60
            ],
            [
                'id' => 133,
                'sort' => 'MV',
                'country_name' => 'Maldives',
                'phoneCode' => 960
            ],
            [
                'id' => 134,
                'sort' => 'ML',
                'country_name' => 'Mali',
                'phoneCode' => 223
            ],
            [
                'id' => 135,
                'sort' => 'MT',
                'country_name' => 'Malta',
                'phoneCode' => 356
            ],
            [
                'id' => 136,
                'sort' => 'XM',
                'country_name' => 'Man (Isle of)',
                'phoneCode' => 44
            ],
            [
                'id' => 137,
                'sort' => 'MH',
                'country_name' => 'Marshall Islands',
                'phoneCode' => 692
            ],
            [
                'id' => 138,
                'sort' => 'MQ',
                'country_name' => 'Martinique',
                'phoneCode' => 596
            ],
            [
                'id' => 139,
                'sort' => 'MR',
                'country_name' => 'Mauritania',
                'phoneCode' => 222
            ],
            [
                'id' => 140,
                'sort' => 'MU',
                'country_name' => 'Mauritius',
                'phoneCode' => 230
            ],
            [
                'id' => 141,
                'sort' => 'YT',
                'country_name' => 'Mayotte',
                'phoneCode' => 269
            ],
            [
                'id' => 142,
                'sort' => 'MX',
                'country_name' => 'Mexico',
                'phoneCode' => 52
            ],
            [
                'id' => 143,
                'sort' => 'FM',
                'country_name' => 'Micronesia',
                'phoneCode' => 691
            ],
            [
                'id' => 144,
                'sort' => 'MD',
                'country_name' => 'Moldova',
                'phoneCode' => 373
            ],
            [
                'id' => 145,
                'sort' => 'MC',
                'country_name' => 'Monaco',
                'phoneCode' => 377
            ],
            [
                'id' => 146,
                'sort' => 'MN',
                'country_name' => 'Mongolia',
                'phoneCode' => 976
            ],
            [
                'id' => 147,
                'sort' => 'MS',
                'country_name' => 'Montserrat',
                'phoneCode' => 1664
            ],
            [
                'id' => 148,
                'sort' => 'MA',
                'country_name' => 'Morocco',
                'phoneCode' => 212
            ],
            [
                'id' => 149,
                'sort' => 'MZ',
                'country_name' => 'Mozambique',
                'phoneCode' => 258
            ],
            [
                'id' => 150,
                'sort' => 'MM',
                'country_name' => 'Myanmar',
                'phoneCode' => 95
            ],
            [
                'id' => 151,
                'sort' => 'NA',
                'country_name' => 'Namibia',
                'phoneCode' => 264
            ],
            [
                'id' => 152,
                'sort' => 'NR',
                'country_name' => 'Nauru',
                'phoneCode' => 674
            ],
            [
                'id' => 153,
                'sort' => 'NP',
                'country_name' => 'Nepal',
                'phoneCode' => 977
            ],
            [
                'id' => 154,
                'sort' => 'AN',
                'country_name' => 'Netherlands Antilles',
                'phoneCode' => 599
            ],
            [
                'id' => 155,
                'sort' => 'NL',
                'country_name' => 'Netherlands The',
                'phoneCode' => 31
            ],
            [
                'id' => 156,
                'sort' => 'NC',
                'country_name' => 'New Caledonia',
                'phoneCode' => 687
            ],
            [
                'id' => 157,
                'sort' => 'NZ',
                'country_name' => 'New Zealand',
                'phoneCode' => 64
            ],
            [
                'id' => 158,
                'sort' => 'NI',
                'country_name' => 'Nicaragua',
                'phoneCode' => 505
            ],
            [
                'id' => 159,
                'sort' => 'NE',
                'country_name' => 'Niger',
                'phoneCode' => 227
            ],
            [
                'id' => 160,
                'sort' => 'NG',
                'country_name' => 'Nigeria',
                'phoneCode' => 234
            ],
            [
                'id' => 161,
                'sort' => 'NU',
                'country_name' => 'Niue',
                'phoneCode' => 683
            ],
            [
                'id' => 162,
                'sort' => 'NF',
                'country_name' => 'Norfolk Island',
                'phoneCode' => 672
            ],
            [
                'id' => 163,
                'sort' => 'MP',
                'country_name' => 'Northern Mariana Islands',
                'phoneCode' => 1670
            ],
            [
                'id' => 164,
                'sort' => 'NO',
                'country_name' => 'Norway',
                'phoneCode' => 47
            ],
            [
                'id' => 165,
                'sort' => 'OM',
                'country_name' => 'Oman',
                'phoneCode' => 968
            ],
            [
                'id' => 166,
                'sort' => 'PK',
                'country_name' => 'Pakistan',
                'phoneCode' => 92
            ],
            [
                'id' => 167,
                'sort' => 'PW',
                'country_name' => 'Palau',
                'phoneCode' => 680
            ],
            [
                'id' => 168,
                'sort' => 'PS',
                'country_name' => 'Palestinian Territory Occupied',
                'phoneCode' => 970
            ],
            [
                'id' => 169,
                'sort' => 'PA',
                'country_name' => 'Panama',
                'phoneCode' => 507
            ],
            [
                'id' => 170,
                'sort' => 'PG',
                'country_name' => 'Papua new Guinea',
                'phoneCode' => 675
            ],
            [
                'id' => 171,
                'sort' => 'PY',
                'country_name' => 'Paraguay',
                'phoneCode' => 595
            ],
            [
                'id' => 172,
                'sort' => 'PE',
                'country_name' => 'Peru',
                'phoneCode' => 51
            ],
            [
                'id' => 173,
                'sort' => 'PH',
                'country_name' => 'Philippines',
                'phoneCode' => 63
            ],
            [
                'id' => 174,
                'sort' => 'PN',
                'country_name' => 'Pitcairn Island',
                'phoneCode' => 0
            ],
            [
                'id' => 175,
                'sort' => 'PL',
                'country_name' => 'Poland',
                'phoneCode' => 48
            ],
            [
                'id' => 176,
                'sort' => 'PT',
                'country_name' => 'Portugal',
                'phoneCode' => 351
            ],
            [
                'id' => 177,
                'sort' => 'PR',
                'country_name' => 'Puerto Rico',
                'phoneCode' => 1787
            ],
            [
                'id' => 178,
                'sort' => 'QA',
                'country_name' => 'Qatar',
                'phoneCode' => 974
            ],
            [
                'id' => 179,
                'sort' => 'RE',
                'country_name' => 'Reunion',
                'phoneCode' => 262
            ],
            [
                'id' => 180,
                'sort' => 'RO',
                'country_name' => 'Romania',
                'phoneCode' => 40
            ],
            [
                'id' => 181,
                'sort' => 'RU',
                'country_name' => 'Russia',
                'phoneCode' => 70
            ],
            [
                'id' => 182,
                'sort' => 'RW',
                'country_name' => 'Rwanda',
                'phoneCode' => 250
            ],
            [
                'id' => 183,
                'sort' => 'SH',
                'country_name' => 'Saint Helena',
                'phoneCode' => 290
            ],
            [
                'id' => 184,
                'sort' => 'KN',
                'country_name' => 'Saint Kitts And Nevis',
                'phoneCode' => 1869
            ],
            [
                'id' => 185,
                'sort' => 'LC',
                'country_name' => 'Saint Lucia',
                'phoneCode' => 1758
            ],
            [
                'id' => 186,
                'sort' => 'PM',
                'country_name' => 'Saint Pierre and Miquelon',
                'phoneCode' => 508
            ],
            [
                'id' => 187,
                'sort' => 'VC',
                'country_name' => 'Saint Vincent And The Grenadines',
                'phoneCode' => 1784
            ],
            [
                'id' => 188,
                'sort' => 'WS',
                'country_name' => 'Samoa',
                'phoneCode' => 684
            ],
            [
                'id' => 189,
                'sort' => 'SM',
                'country_name' => 'San Marino',
                'phoneCode' => 378
            ],
            [
                'id' => 190,
                'sort' => 'ST',
                'country_name' => 'Sao Tome and Principe',
                'phoneCode' => 239
            ],
            [
                'id' => 191,
                'sort' => 'SA',
                'country_name' => 'Saudi Arabia',
                'phoneCode' => 966
            ],
            [
                'id' => 192,
                'sort' => 'SN',
                'country_name' => 'Senegal',
                'phoneCode' => 221
            ],
            [
                'id' => 193,
                'sort' => 'RS',
                'country_name' => 'Serbia',
                'phoneCode' => 381
            ],
            [
                'id' => 194,
                'sort' => 'SC',
                'country_name' => 'Seychelles',
                'phoneCode' => 248
            ],
            [
                'id' => 195,
                'sort' => 'SL',
                'country_name' => 'Sierra Leone',
                'phoneCode' => 232
            ],
            [
                'id' => 196,
                'sort' => 'SG',
                'country_name' => 'Singapore',
                'phoneCode' => 65
            ],
            [
                'id' => 197,
                'sort' => 'SK',
                'country_name' => 'Slovakia',
                'phoneCode' => 421
            ],
            [
                'id' => 198,
                'sort' => 'SI',
                'country_name' => 'Slovenia',
                'phoneCode' => 386
            ],
            [
                'id' => 199,
                'sort' => 'XG',
                'country_name' => 'Smaller Territories of the UK',
                'phoneCode' => 44
            ],
            [
                'id' => 200,
                'sort' => 'SB',
                'country_name' => 'Solomon Islands',
                'phoneCode' => 677
            ],
            [
                'id' => 201,
                'sort' => 'SO',
                'country_name' => 'Somalia',
                'phoneCode' => 252
            ],
            [
                'id' => 202,
                'sort' => 'ZA',
                'country_name' => 'South Africa',
                'phoneCode' => 27
            ],
            [
                'id' => 203,
                'sort' => 'GS',
                'country_name' => 'South Georgia',
                'phoneCode' => 0
            ],
            [
                'id' => 204,
                'sort' => 'SS',
                'country_name' => 'South Sudan',
                'phoneCode' => 211
            ],
            [
                'id' => 205,
                'sort' => 'ES',
                'country_name' => 'Spain',
                'phoneCode' => 34
            ],
            [
                'id' => 206,
                'sort' => 'LK',
                'country_name' => 'Sri Lanka',
                'phoneCode' => 94
            ],
            [
                'id' => 207,
                'sort' => 'SD',
                'country_name' => 'Sudan',
                'phoneCode' => 249
            ],
            [
                'id' => 208,
                'sort' => 'SR',
                'country_name' => 'Suricountry_name',
                'phoneCode' => 597
            ],
            [
                'id' => 209,
                'sort' => 'SJ',
                'country_name' => 'Svalbard And Jan Mayen Islands',
                'phoneCode' => 47
            ],
            [
                'id' => 210,
                'sort' => 'SZ',
                'country_name' => 'Swaziland',
                'phoneCode' => 268
            ],
            [
                'id' => 211,
                'sort' => 'SE',
                'country_name' => 'Sweden',
                'phoneCode' => 46
            ],
            [
                'id' => 212,
                'sort' => 'CH',
                'country_name' => 'Switzerland',
                'phoneCode' => 41
            ],
            [
                'id' => 213,
                'sort' => 'SY',
                'country_name' => 'Syria',
                'phoneCode' => 963
            ],
            [
                'id' => 214,
                'sort' => 'TW',
                'country_name' => 'Taiwan',
                'phoneCode' => 886
            ],
            [
                'id' => 215,
                'sort' => 'TJ',
                'country_name' => 'Tajikistan',
                'phoneCode' => 992
            ],
            [
                'id' => 216,
                'sort' => 'TZ',
                'country_name' => 'Tanzania',
                'phoneCode' => 255
            ],
            [
                'id' => 217,
                'sort' => 'TH',
                'country_name' => 'Thailand',
                'phoneCode' => 66
            ],
            [
                'id' => 218,
                'sort' => 'TG',
                'country_name' => 'Togo',
                'phoneCode' => 228
            ],
            [
                'id' => 219,
                'sort' => 'TK',
                'country_name' => 'Tokelau',
                'phoneCode' => 690
            ],
            [
                'id' => 220,
                'sort' => 'TO',
                'country_name' => 'Tonga',
                'phoneCode' => 676
            ],
            [
                'id' => 221,
                'sort' => 'TT',
                'country_name' => 'Trinidad And Tobago',
                'phoneCode' => 1868
            ],
            [
                'id' => 222,
                'sort' => 'TN',
                'country_name' => 'Tunisia',
                'phoneCode' => 216
            ],
            [
                'id' => 223,
                'sort' => 'TR',
                'country_name' => 'Turkey',
                'phoneCode' => 90
            ],
            [
                'id' => 224,
                'sort' => 'TM',
                'country_name' => 'Turkmenistan',
                'phoneCode' => 7370
            ],
            [
                'id' => 225,
                'sort' => 'TC',
                'country_name' => 'Turks And Caicos Islands',
                'phoneCode' => 1649
            ],
            [
                'id' => 226,
                'sort' => 'TV',
                'country_name' => 'Tuvalu',
                'phoneCode' => 688
            ],
            [
                'id' => 227,
                'sort' => 'UG',
                'country_name' => 'Uganda',
                'phoneCode' => 256
            ],
            [
                'id' => 228,
                'sort' => 'UA',
                'country_name' => 'Ukraine',
                'phoneCode' => 380
            ],
            [
                'id' => 229,
                'sort' => 'AE',
                'country_name' => 'United Arab Emirates',
                'phoneCode' => 971
            ],
            [
                'id' => 230,
                'sort' => 'GB',
                'country_name' => 'United Kingdom',
                'phoneCode' => 44
            ],
            [
                'id' => 231,
                'sort' => 'US',
                'country_name' => 'United States',
                'phoneCode' => 1
            ],
            [
                'id' => 232,
                'sort' => 'UM',
                'country_name' => 'United States Minor Outlying Islands',
                'phoneCode' => 1
            ],
            [
                'id' => 233,
                'sort' => 'UY',
                'country_name' => 'Uruguay',
                'phoneCode' => 598
            ],
            [
                'id' => 234,
                'sort' => 'UZ',
                'country_name' => 'Uzbekistan',
                'phoneCode' => 998
            ],
            [
                'id' => 235,
                'sort' => 'VU',
                'country_name' => 'Vanuatu',
                'phoneCode' => 678
            ],
            [
                'id' => 236,
                'sort' => 'VA',
                'country_name' => 'Vatican City State (Holy See)',
                'phoneCode' => 39
            ],
            [
                'id' => 237,
                'sort' => 'VE',
                'country_name' => 'Venezuela',
                'phoneCode' => 58
            ],
            [
                'id' => 238,
                'sort' => 'VN',
                'country_name' => 'Vietnam',
                'phoneCode' => 84
            ],
            [
                'id' => 239,
                'sort' => 'VG',
                'country_name' => 'Virgin Islands (British)',
                'phoneCode' => 1284
            ],
            [
                'id' => 240,
                'sort' => 'VI',
                'country_name' => 'Virgin Islands (US)',
                'phoneCode' => 1340
            ],
            [
                'id' => 241,
                'sort' => 'WF',
                'country_name' => 'Wallis And Futuna Islands',
                'phoneCode' => 681
            ],
            [
                'id' => 242,
                'sort' => 'EH',
                'country_name' => 'Western Sahara',
                'phoneCode' => 212
            ],
            [
                'id' => 243,
                'sort' => 'YE',
                'country_name' => 'Yemen',
                'phoneCode' => 967
            ],
            [
                'id' => 244,
                'sort' => 'YU',
                'country_name' => 'Yugoslavia',
                'phoneCode' => 38
            ],
            [
                'id' => 245,
                'sort' => 'ZM',
                'country_name' => 'Zambia',
                'phoneCode' => 260
            ],
            [
                'id' => 246,
                'sort' => 'ZW',
                'country_name' => 'Zimbabwe',
                'phoneCode' => 26
            ],
        ];
        Country::insert($countries);
    }
}
