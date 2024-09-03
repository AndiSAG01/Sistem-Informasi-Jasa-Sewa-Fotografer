<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |--------------------------------------------------------------------------
    |
    | Berikut adalah baris bahasa default yang berisi pesan kesalahan yang digunakan oleh
    | kelas validator. Beberapa aturan memiliki beberapa versi seperti aturan ukuran (size).
    | Anda bebas untuk menyesuaikan pesan-pesan ini sesuai kebutuhan aplikasi Anda.
    |
    */

    'accepted' => ':Attribute harus diterima.',
    'accepted_if' => ':Attribute harus diterima jika :other adalah :value.',
    'active_url' => ':Attribute bukan URL yang valid.',
    'after' => ':Attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ':Attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ':Attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':Attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => ':Attribute hanya boleh berisi huruf dan angka.',
    'array' => ':Attribute harus berupa array.',
    'before' => ':Attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => ':Attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':Attribute harus antara :min dan :max.',
        'file' => ':Attribute harus antara :min dan :max kilobita.',
        'string' => ':Attribute harus antara :min dan :max karakter.',
        'array' => ':Attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean' => ':Attribute harus bernilai true atau false.',
    'confirmed' => ':Attribute konfirmasi tidak cocok.',
    'current_password' => 'Kata sandi saat ini salah.',
    'date' => ':Attribute bukan tanggal yang valid.',
    'date_equals' => ':Attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => ':Attribute tidak cocok dengan format :format.',
    'declined' => ':Attribute harus ditolak.',
    'declined_if' => ':Attribute harus ditolak jika :other adalah :value.',
    'different' => ':Attribute dan :other harus berbeda.',
    'digits' => ':Attribute harus berupa angka :digits.',
    'digits_between' => ':Attribute harus antara angka :min dan :max.',
    'dimensions' => ':Attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => ':Attribute memiliki nilai duplikat.',
    'email' => ':Attribute harus berupa alamat email yang valid.',
    'ends_with' => ':Attribute harus diakhiri salah satu dari berikut: :values.',
    'enum' => ':Attribute yang dipilih tidak valid.',
    'exists' => ':Attribute yang dipilih tidak valid.',
    'file' => ':Attribute harus berupa file.',
    'filled' => ':Attribute harus memiliki nilai.',
    'gt' => [
        'numeric' => ':Attribute harus lebih besar dari :value.',
        'file' => ':Attribute harus lebih besar dari :value kilobita.',
        'string' => ':Attribute harus lebih besar dari :value karakter.',
        'array' => ':Attribute harus memiliki lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => ':Attribute harus lebih besar dari atau sama dengan :value.',
        'file' => ':Attribute harus lebih besar dari atau sama dengan :value kilobita.',
        'string' => ':Attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array' => ':Attribute harus memiliki :value item atau lebih.',
    ],
    'image' => ':Attribute harus berupa gambar.',
    'in' => ':Attribute yang dipilih tidak valid.',
    'in_array' => ':Attribute tidak ada dalam :other.',
    'integer' => ':Attribute harus berupa bilangan bulat.',
    'ip' => ':Attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':Attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':Attribute harus berupa alamat IPv6 yang valid.',
    'json' => ':Attribute harus berupa JSON string yang valid.',
    'lt' => [
        'numeric' => ':Attribute harus kurang dari :value.',
        'file' => ':Attribute harus kurang dari :value kilobita.',
        'string' => ':Attribute harus kurang dari :value karakter.',
        'array' => ':Attribute harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => ':Attribute harus kurang dari atau sama dengan :value.',
        'file' => ':Attribute harus kurang dari atau sama dengan :value kilobita.',
        'string' => ':Attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => ':Attribute harus tidak lebih dari :value item.',
    ],
    'mac_address' => ':Attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'numeric' => ':Attribute tidak boleh lebih besar dari :max.',
        'file' => ':Attribute tidak boleh lebih besar dari :max kilobita.',
        'string' => ':Attribute tidak boleh lebih besar dari :max karakter.',
        'array' => ':Attribute tidak boleh memiliki lebih dari :max item.',
    ],
    'mimes' => ':Attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => ':Attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'numeric' => ':Attribute harus minimal :min.',
        'file' => ':Attribute harus minimal :min kilobita.',
        'string' => ':Attribute harus minimal :min karakter.',
        'array' => ':Attribute harus memiliki minimal :min item.',
    ],
    'multiple_of' => ':Attribute harus merupakan kelipatan dari :value.',
    'not_in' => ':Attribute yang dipilih tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => ':Attribute harus berupa angka.',
    'password' => 'Kata sandi salah.',
    'present' => ':Attribute harus ada.',
    'prohibited' => ':Attribute bidang dilarang.',
    'prohibited_if' => ':Attribute bidang dilarang ketika :other adalah :value.',
    'prohibited_unless' => ':Attribute bidang dilarang kecuali :other ada dalam :values.',
    'prohibits' => ':Attribute bidang melarang :other agar ada.',
    'regex' => 'Format :attribute tidak valid.',
    'required' => ':Attribute harus diisi.',
    'required_array_keys' => 'Bidang :attribute harus berisi entri untuk: :values.',
    'required_if' => ':Attribute harus diisi ketika :other adalah :value.',
    'required_unless' => ':Attribute harus diisi kecuali :other ada dalam :values.',
    'required_with' => ':Attribute harus diisi ketika :values ada.',
    'required_with_all' => ':Attribute harus diisi ketika :values ada.',
    'required_without' => ':Attribute harus diisi ketika :values tidak ada.',
    'required_without_all' => ':Attribute harus diisi ketika tidak ada :values.',
    'same' => ':Attribute dan :other harus sama.',
    'size' => [
        'numeric' => ':Attribute harus berukuran :size.',
        'file' => ':Attribute harus berukuran :size kilobita.',
        'string' => ':Attribute harus berukuran :size karakter.',
        'array' => ':Attribute harus berisi :size item.',
    ],
    'starts_with' => ':Attribute harus diawali salah satu dari berikut: :values.',
    'string' => ':Attribute harus berupa teks.',
    'timezone' => ':Attribute harus berupa zona waktu yang valid.',
    'unique' => ':Attribute telah digunakan.',
    'uploaded' => ':Attribute gagal diunggah.',
    'url' => ':Attribute harus berupa URL yang valid.',
    'uuid' => ':Attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut dengan
    | menggunakan konvensi "attribute.rule" untuk nama barisnya. Ini memudahkan
    | Anda untuk menentukan pesan bahasa khusus untuk aturan atribut tertentu.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atribut-atribut Kustom untuk Validasi
    |--------------------------------------------------------------------------
    |
    | Berikut adalah baris bahasa yang digunakan untuk menggantikan placeholder atribut
    | kita dengan sesuatu yang lebih mudah dipahami oleh pembaca seperti "Alamat E-Mail"
    | sebagai gantinya dari "email". Ini hanya membantu kita membuat pesan lebih ekspresif.
    |
    */

    'attributes' => [],

];
