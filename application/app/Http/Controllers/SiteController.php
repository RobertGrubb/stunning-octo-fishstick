<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{

    public $countries = [
        "US" => "United States",
        "CA" => "Canada",
        "AU" => "Australia",
        "AF" => "Afghanistan",
        "AL" => "Albania",
        "DZ" => "Algeria",
        "AS" => "American Samoa",
        "AD" => "Andorra",
        "AO" => "Angola",
        "AI" => "Anguilla",
        "AQ" => "Antarctica",
        "AG" => "Antigua & Barbuda",
        "AR" => "Argentina",
        "AM" => "Armenia",
        "AW" => "Aruba",
        "AT" => "Austria",
        "AZ" => "Azerbaijan",
        "BS" => "Bahamas",
        "BH" => "Bahrain",
        "BD" => "Bangladesh",
        "BB" => "Barbados",
        "BY" => "Belarus",
        "BE" => "Belgium",
        "BZ" => "Belize",
        "BJ" => "Benin",
        "BM" => "Bermuda",
        "BT" => "Bhutan",
        "BO" => "Bolivia",
        "BA" => "Bosnia/Hercegovina",
        "BW" => "Botswana",
        "BV" => "Bouvet Island",
        "BR" => "Brazil",
        "IO" => "British Indian Ocean Territory",
        "BN" => "Brunei Darussalam",
        "BG" => "Bulgaria",
        "BF" => "Burkina Faso",
        "BI" => "Burundi",
        "KH" => "Cambodia",
        "CM" => "Cameroon",
        "CV" => "Cape Verde",
        "KY" => "Cayman Is",
        "CF" => "Central African Republic",
        "TD" => "Chad",
        "CL" => "Chile",
        "CN" => "China, People's Republic of",
        "CX" => "Christmas Island",
        "CC" => "Cocos Islands",
        "CO" => "Colombia",
        "KM" => "Comoros",
        "CG" => "Congo",
        "CD" => "Congo, Democratic Republic",
        "CK" => "Cook Islands",
        "CR" => "Costa Rica",
        "CI" => "Cote d'Ivoire",
        "HR" => "Croatia",
        "CU" => "Cuba",
        "CY" => "Cyprus",
        "CZ" => "Czech Republic",
        "DK" => "Denmark",
        "DJ" => "Djibouti",
        "DM" => "Dominica",
        "DO" => "Dominican Republic",
        "TP" => "East Timor",
        "EC" => "Ecuador",
        "EG" => "Egypt",
        "SV" => "El Salvador",
        "GQ" => "Equatorial Guinea",
        "ER" => "Eritrea",
        "EE" => "Estonia",
        "ET" => "Ethiopia",
        "FK" => "Falkland Islands",
        "FO" => "Faroe Islands",
        "FJ" => "Fiji",
        "FI" => "Finland",
        "FR" => "France",
        "FX" => "France, Metropolitan",
        "GF" => "French Guiana",
        "PF" => "French Polynesia",
        "TF" => "French South Territories",
        "GA" => "Gabon",
        "GM" => "Gambia",
        "GE" => "Georgia",
        "DE" => "Germany",
        "GH" => "Ghana",
        "GI" => "Gibraltar",
        "GR" => "Greece",
        "GL" => "Greenland",
        "GD" => "Grenada",
        "GP" => "Guadeloupe",
        "GU" => "Guam",
        "GT" => "Guatemala",
        "GN" => "Guinea",
        "GW" => "Guinea-Bissau",
        "GY" => "Guyana",
        "HT" => "Haiti",
        "HM" => "Heard Island And Mcdonald Island",
        "HN" => "Honduras",
        "HK" => "Hong Kong",
        "HU" => "Hungary",
        "IS" => "Iceland",
        "IN" => "India",
        "ID" => "Indonesia",
        "IR" => "Iran",
        "IQ" => "Iraq",
        "IE" => "Ireland",
        "IL" => "Israel",
        "IT" => "Italy",
        "JM" => "Jamaica",
        "JP" => "Japan",
        "JT" => "Johnston Island",
        "JO" => "Jordan",
        "KZ" => "Kazakhstan",
        "KE" => "Kenya",
        "KI" => "Kiribati",
        "KP" => "Korea, Democratic Peoples Republic",
        "KR" => "Korea, Republic of",
        "KW" => "Kuwait",
        "KG" => "Kyrgyzstan",
        "LA" => "Lao People's Democratic Republic",
        "LV" => "Latvia",
        "LB" => "Lebanon",
        "LS" => "Lesotho",
        "LR" => "Liberia",
        "LY" => "Libyan Arab Jamahiriya",
        "LI" => "Liechtenstein",
        "LT" => "Lithuania",
        "LU" => "Luxembourg",
        "MO" => "Macau",
        "MK" => "Macedonia",
        "MG" => "Madagascar",
        "MW" => "Malawi",
        "MY" => "Malaysia",
        "MV" => "Maldives",
        "ML" => "Mali",
        "MT" => "Malta",
        "MH" => "Marshall Islands",
        "MQ" => "Martinique",
        "MR" => "Mauritania",
        "MU" => "Mauritius",
        "YT" => "Mayotte",
        "MX" => "Mexico",
        "FM" => "Micronesia",
        "MD" => "Moldavia",
        "MC" => "Monaco",
        "MN" => "Mongolia",
        "MS" => "Montserrat",
        "MA" => "Morocco",
        "MZ" => "Mozambique",
        "MM" => "Union Of Myanmar",
        "NA" => "Namibia",
        "NR" => "Nauru Island",
        "NP" => "Nepal",
        "NL" => "Netherlands",
        "AN" => "Netherlands Antilles",
        "NC" => "New Caledonia",
        "NZ" => "New Zealand",
        "NI" => "Nicaragua",
        "NE" => "Niger",
        "NG" => "Nigeria",
        "NU" => "Niue",
        "NF" => "Norfolk Island",
        "MP" => "Mariana Islands, Northern",
        "NO" => "Norway",
        "OM" => "Oman",
        "PK" => "Pakistan",
        "PW" => "Palau Islands",
        "PS" => "Palestine",
        "PA" => "Panama",
        "PG" => "Papua New Guinea",
        "PY" => "Paraguay",
        "PE" => "Peru",
        "PH" => "Philippines",
        "PN" => "Pitcairn",
        "PL" => "Poland",
        "PT" => "Portugal",
        "PR" => "Puerto Rico",
        "QA" => "Qatar",
        "RE" => "Reunion Island",
        "RO" => "Romania",
        "RU" => "Russian Federation",
        "RW" => "Rwanda",
        "WS" => "Samoa",
        "SH" => "St Helena",
        "KN" => "St Kitts & Nevis",
        "LC" => "St Lucia",
        "PM" => "St Pierre & Miquelon",
        "VC" => "St Vincent",
        "SM" => "San Marino",
        "ST" => "Sao Tome & Principe",
        "SA" => "Saudi Arabia",
        "SN" => "Senegal",
        "SC" => "Seychelles",
        "SL" => "Sierra Leone",
        "SG" => "Singapore",
        "SK" => "Slovakia",
        "SI" => "Slovenia",
        "SB" => "Solomon Islands",
        "SO" => "Somalia",
        "ZA" => "South Africa",
        "GS" => "South Georgia and South Sandwich",
        "ES" => "Spain",
        "LK" => "Sri Lanka",
        "XX" => "Stateless Persons",
        "SD" => "Sudan",
        "SR" => "Suriname",
        "SJ" => "Svalbard and Jan Mayen",
        "SZ" => "Swaziland",
        "SE" => "Sweden",
        "CH" => "Switzerland",
        "SY" => "Syrian Arab Republic",
        "TW" => "Taiwan, Republic of China",
        "TJ" => "Tajikistan",
        "TZ" => "Tanzania",
        "TH" => "Thailand",
        "TL" => "Timor Leste",
        "TG" => "Togo",
        "TK" => "Tokelau",
        "TO" => "Tonga",
        "TT" => "Trinidad & Tobago",
        "TN" => "Tunisia",
        "TR" => "Turkey",
        "TM" => "Turkmenistan",
        "TC" => "Turks And Caicos Islands",
        "TV" => "Tuvalu",
        "UG" => "Uganda",
        "UA" => "Ukraine",
        "AE" => "United Arab Emirates",
        "GB" => "United Kingdom",
        "UM" => "US Minor Outlying Islands",
        "US" => "United States",
        "HV" => "Upper Volta",
        "UY" => "Uruguay",
        "UZ" => "Uzbekistan",
        "VU" => "Vanuatu",
        "VA" => "Vatican City State",
        "VE" => "Venezuela",
        "VN" => "Vietnam",
        "VG" => "Virgin Islands (British)",
        "VI" => "Virgin Islands (US)",
        "WF" => "Wallis And Futuna Islands",
        "EH" => "Western Sahara",
        "YE" => "Yemen Arab Rep.",
        "YD" => "Yemen Democratic",
        "YU" => "Yugoslavia",
        "ZR" => "Zaire",
        "ZM" => "Zambia",
        "ZW" => "Zimbabwe",
    ];

    /**
     * Inserts a new subscriber into the mailerlite api
     * based on the post parameters passed in the request.
     */
    public function insert(Request $request)
    {

        /**
         * Retrieve settings from database and validate
         * that the key does exist.
         *
         * If not, the user needs to be redirected so they
         * can provide the API key.
         */
        $settings = new \App\Models\Setting();
        $mailerApiKey = $settings::where('variable', '=', 'mailerlite_api_key')->first();

        if (!$mailerApiKey) {
            return redirect('/');
        }

        if (!isset($mailerApiKey->value)) {
            return redirect('/');
        }

        // Instantiate a new instance of the mailerapi subscribers api class.
        $subscribersApi = (new \MailerLiteApi\MailerLite($mailerApiKey->value))->subscribers();

        /**
         * Retrieve post data and validate that there is
         * values for the required fields.
         */
        $name = $request->input('name');
        $email = $request->input('email');
        $country = $request->input('country');

        /**
         * Validate the request
         */
        $validator = Validator::make($request->all(), [
            'name' => 'string|required',
            'email' => 'email|required',
            'country' => 'string|required',
        ]);

        if ($validator->fails()) {
            return redirect('/create')->with('error', 'Please check that all fields are provided with valid data.');
        }

        $data = [
            'name' => $name,
            'email' => $email,
            'fields' => [
                'country' => $country,
            ],
        ];

        try {
            $subscribersApi->create($data);
        } catch (Exception $e) {
            return redirect('/create')->with('error', $e->getMessage());
        }

        return redirect('/')->with('message', 'Subscriber was created successfully.');
    }

    /**
     * Saves the mailerlite API key in the database
     */
    public function create(Request $request)
    {

        /**
         * Retrieve settings from database and validate
         * that the key does exist.
         *
         * If not, the user needs to be redirected so they
         * can provide the API key.
         */
        $settings = new \App\Models\Setting();
        $mailerApiKey = $settings::where('variable', '=', 'mailerlite_api_key')->first();

        if (!$mailerApiKey) {
            return redirect('/');
        }

        if (!isset($mailerApiKey->value)) {
            return redirect('/');
        }

        return view('create')->with([
            'countries' => $this->countries,
        ]);
    }

    /**
     * Saves the mailerlite API key in the database
     */
    public function delete(Request $request, string $id)
    {

        /**
         * Retrieve settings from database and validate
         * that the key does exist.
         *
         * If not, the user needs to be redirected so they
         * can provide the API key.
         */
        $settings = new \App\Models\Setting();
        $mailerApiKey = $settings::where('variable', '=', 'mailerlite_api_key')->first();

        if (!$mailerApiKey) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid API key',
            ], 500);
        }

        if (!isset($mailerApiKey->value)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid API key',
            ], 500);
        }

        // Instantiate a new instance of the mailerapi subscribers api class.
        $subscribersApi = (new \MailerLiteApi\MailerLite($mailerApiKey->value))->subscribers();

        try {
            $res = $subscribersApi->delete($id);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }

        if (isset($res->error_details)) {
            if ($res->error->code) {
                return response()->json([
                    'success' => false,
                    'message' => $res->error_details->message,
                ], $res->error->code);
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Subscriber deleted successfully',
            'res' => $res,
        ], 200);
    }

    /**
     * Saves the mailerlite API key in the database
     */
    public function update(Request $request, string $id)
    {

        /**
         * Retrieve settings from database and validate
         * that the key does exist.
         *
         * If not, the user needs to be redirected so they
         * can provide the API key.
         */
        $settings = new \App\Models\Setting();
        $mailerApiKey = $settings::where('variable', '=', 'mailerlite_api_key')->first();

        if (!$mailerApiKey) {
            return redirect('/');
        }

        if (!isset($mailerApiKey->value)) {
            return redirect('/');
        }

        // Instantiate a new instance of the mailerapi subscribers api class.
        $subscribersApi = (new \MailerLiteApi\MailerLite($mailerApiKey->value))->subscribers();

        // Retrieve the subscriber to edit via id
        try {
            $subscriber = $subscribersApi->find($id);
        } catch (Exception $e) {
            return view('error')->with([
                'error' => (object) [
                    'code' => 'Error',
                    'message' => 'Mailerlite returned "' . $e->getMessage() . '"',
                ],
            ]);
        }

        if (!$subscriber) {
            return view('error')->with([
                'error' => (object) [
                    'code' => 'Not Found',
                    'message' => 'Subscriber was not found',
                ],
                'cta' => (object) [
                    'title' => 'Back',
                    'href' => '/',
                ],
            ]);
        }

        /**
         * Retrieve post data and validate that there is
         * values for the required fields.
         */
        $name = $request->input('name');
        $country = $request->input('country');

        /**
         * Validate the request
         */
        $validator = Validator::make($request->all(), [
            'name' => 'string|required',
            'country' => 'string|required',
        ]);

        if ($validator->fails()) {
            return redirect('/edit/' . $id)->with('error', 'Please check that all fields are provided with valid data.');
        }

        // Setup data structure to save
        $data = [
            'name' => $name,
            'fields' => [
                'country' => $country,
            ],
        ];

        try {
            $subscribersApi->update($id, $data);
        } catch (Exception $e) {
            return redirect('/edit/' . $id)->with('error', $e->getMessage());
        }

        return redirect('/edit/' . $id)->with('message', 'Subscriber was updated successfully.');
    }

    /**
     * Saves the mailerlite API key in the database
     */
    public function edit(Request $request, string $id)
    {

        /**
         * Retrieve settings from database and validate
         * that the key does exist.
         *
         * If not, the user needs to be redirected so they
         * can provide the API key.
         */
        $settings = new \App\Models\Setting();
        $mailerApiKey = $settings::where('variable', '=', 'mailerlite_api_key')->first();

        if (!$mailerApiKey) {
            return redirect('/');
        }

        if (!isset($mailerApiKey->value)) {
            return redirect('/');
        }

        // Instantiate a new instance of the mailerapi subscribers api class.
        $subscribersApi = (new \MailerLiteApi\MailerLite($mailerApiKey->value))->subscribers();

        // Retrieve the subscriber to edit via id
        try {
            $subscriber = $subscribersApi->find($id);
        } catch (Exception $e) {
            return view('error')->with([
                'error' => (object) [
                    'code' => 'Error',
                    'message' => 'Mailerlite returned "' . $e->getMessage() . '"',
                ],
            ]);
        }

        if (!$subscriber) {
            return view('error')->with([
                'error' => (object) [
                    'code' => 'Not Found',
                    'message' => 'Subscriber was not found',
                ],
                'cta' => (object) [
                    'title' => 'Back',
                    'href' => '/',
                ],
            ]);
        }

        return view('edit')->with([
            'subscriber' => $subscriber,
            'countries' => $this->countries,

            /**
             * Simple method to return a specific field
             * for a subscriber
             */
            'subField' => function ($fields, $key) {
                foreach ($fields as $field) {
                    if ($field->key === $key) {
                        return $field->value;
                    }
                }
            },
        ]);
    }

    /**
     * Saves the mailerlite API key in the database
     */
    public function save(Request $request)
    {
        $key = $request->input('key');

        if (!$key) {
            return redirect('/?error=NO_KEY');
        }

        $settings = new \App\Models\Setting();

        try {
            $settings::updateOrCreate(
                ['variable' => 'mailerlite_api_key'],
                ['value' => $key, 'variable' => 'mailerlite_api_key']
            );
        } catch (Exception $e) {
            return redirect('/')->with('error', $e->getMessage());
        }

        return redirect('/')->with('message', 'API Key was updated successfully.');
    }

    /**
     * Displays the main page for Mailerlite Subscriber details
     */
    public function index(Request $request)
    {

        /**
         * Retrieve settings from database and validate
         * that the key does exist.
         *
         * If not, the user needs to be redirected so they
         * can provide the API key.
         */
        $settings = new \App\Models\Setting();

        $mailerApiKey = $settings::where('variable', '=', 'mailerlite_api_key')->first();

        if (!$mailerApiKey) {
            return view('set-api-key', [
                'key' => $mailerApiKey,
            ]);
        }

        if (!isset($mailerApiKey->value)) {
            return view('set-api-key', [
                'key' => $mailerApiKey,
            ]);
        }

        /**
         * If this is an AJAX request, process the subscribers here.
         */
        if (request()->ajax()) {
            $subscribersApi = (new \MailerLiteApi\MailerLite($mailerApiKey->value))->subscribers();

            try {
                $subscribers = $subscribersApi->get();
            } catch (Exception $e) {
                return view('error')->with([
                    'error' => (object) [
                        'code' => 'Error',
                        'message' => 'Mailerlite returned "' . $e->getMessage() . '"',
                    ],
                ]);
            }

            /**
             * Check if there is an API error returned.
             */
            $error = false;
            foreach ($subscribers as $sub) {
                if (isset($sub->error)) {
                    $error = $sub->error;
                }
            }

            // If there is an error, display the error page
            if ($error) {
                return view('error')->with([
                    'error' => $error,
                ]);
            }

            $subField = function ($fields, $key) {
                foreach ($fields as $field) {
                    if ($field->key === $key) {
                        return $field->value;
                    }
                }
            };

            $output = [];

            /**
             * Output in a format that is compatible for Datatables
             */
            foreach ($subscribers as $subscriber) {
                $output[] = [
                    $subscriber->name,
                    $subscriber->email,
                    $subField($subscriber->fields, 'country'),
                    date('d/m/Y', strtotime($subscriber->date_subscribe)),
                    date('H:i:s', strtotime($subscriber->date_subscribe)),
                    '<a href="javascript:void(0);" onclick="deleteSubscriber(\'' . (string) $subscriber->id . '\');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>',
                ];
            }

            return response()->json(['data' => $output]);
        }

        return view('welcome')->with([
            'error' => $request->query('error'),
            'message' => $request->query('message'),
            'key' => $mailerApiKey,
        ]);
    }

    /**
     * Saves the mailerlite API key in the database
     */
    public function changeKey()
    {
        /**
         * Retrieve settings from database and validate
         * that the key does exist.
         *
         * If not, the user needs to be redirected so they
         * can provide the API key.
         */
        $settings = new \App\Models\Setting();

        $mailerApiKey = $settings::where('variable', '=', 'mailerlite_api_key')->first();

        return view('set-api-key')->with([
            'key' => $mailerApiKey,
        ]);
    }
}