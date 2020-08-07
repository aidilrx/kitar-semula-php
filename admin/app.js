app.controller("kitarSemulaAdminCtrl", kitarSemulaAdminCtrl);

function kitarSemulaAdminCtrl($scope, $http) {
    var $ = $scope;
    $.memuatSenaraiPengguna = true;
    // $.senaraiPengguna = [{
    //     nama: "Pengguna-1"
    // },
    // {
    //     nama: "Pengguna-2"
    // }
    // ];

    var url = new URL(window.location.href);
    $.mukaSurat = Number.parseInt(url.searchParams.get('page')) || 1;
    $.url = url;
    // $.senaraiPenggunaPendek = [];
    $.penghitung = 0;
    $.memuatPengguna = function () {
        $.memuatSenaraiPengguna = true;
        $http({
            method: "GET",
            url: `../cari/search.php?q=${$.query || ''}`,
        }).then(function (success) {
            $.senaraiPengguna = success.data;
            $.jumlahPengguna = $.senaraiPengguna.length;
            $.senaraiPenggunaPendek = [];
            for (var i = 0, separator = 25, start = 0; i < $.senaraiPengguna.length / separator; i++) {
                $.senaraiPenggunaPendek.push($.senaraiPengguna.slice(start, start + separator));
                start += start + separator > $.senaraiPengguna.length ? $.senaraiPengguna.length - 1 : separator;
            }
            $.senaraiPenggunaPendek.length;
            console.log($.senaraiPenggunaPendek);

            if($.senaraiPengguna.length == 0) {
                $.senaraiPengguna.push({err: "Tiada maklumat dijumpai"})
            }

            $.memuatSenaraiPengguna = false;
        }, function (err) {
            console.log(err);
            $.jumlahPengguna = 1;
            $.memuatSenaraiPengguna = false;
        });
        // $.memuatSenaraiPengguna = false;

    }
    $.setMemuatSenaraiPengguna = function(expr) {
        $.memuatSenaraiPengguna = expr;
    }


}
var senaraiPenggunaPendek_0 = [
    { "id": "201", "nokp": "523989203907", "nama": "Iqfl9Hb7FzLSaAtjPfmXCdx1uedNQlEIMkBZexDY92fIemkZzerHjaWxT3waZfFb8J1J5uQmm", "katalaluan": "O8sLBJ5QdM2fZT6szg8er1S77DgJmBkEatFJTl4qY1xIk0RB5U3F44rj2FsMqhhhKT8K", "point": "1.34" }, { "id": "202", "nokp": "673059704506", "nama": "mvouavigjMpd1gzjX1cKki2zDgxUaj4b70knWShIP52Oo", "katalaluan": "bDXYHKCrLQwGR7N7p1s3D8LSQcVipPSJ5nzjFy9rWUgLl7yoxda3IyLom4hvWij0exGKE0gY5wqWZD7jmWD2ny7yAGfB", "point": "63.69" }, { "id": "203", "nokp": "637404235848", "nama": "mc40NirqCOCM7LkqbZHDl3DLU9T6jKA1WtaLytnFgw7C", "katalaluan": "YEkj7soMcoa0cHO3AjHx4un3Ll5gK5dHD3ASgm7v4eJltz9aRVemou0f2Wbojy3DUv6SVOlWvBCnGbAmm7JE4tS", "point": "699.07" }, { "id": "204", "nokp": "927040932288", "nama": "JLDBibAnYl4UyvBlUA03RZQtTLKoapokUw2YMHknkszo7hv", "katalaluan": "sbQ3YmERV9X5xHtrkHsXTwDfreQzNAhK99r", "point": "40.10" }, { "id": "205", "nokp": "807746089855", "nama": "vDDer6HFTwcyradVIF5CWZWBTtrTcxsBcuLTiow46ry0j3P8SLfHmOoQwvMqvJPpuD1D1rOTWG0ZNnYbYmaCmDrz4L", "katalaluan": "rVz8KUfHfjNcELwHmJctTDnBJGjn4HUyCv5ojOHxnwDggI0IuvKGLkGIf3CThPg2YKAo8WqoJ5WXQde", "point": "11254.07" }, { "id": "206", "nokp": "571951663862", "nama": "T3P6dyspYAeOpN8IGnqQhQ4QG0rVbTizN5ezHVwpE8hoD8kCBfU5EvfV6aIW6VtVoZbQBWNug1WEbf80fyA", "katalaluan": "vBhCdnwPqYu30ALXI3MwQ8W4XTohwRIS81ZvVm3C5hGaNPx8471ubvPBSeSOqdb7wArB8J0ymx0G682uerRbKHmhkEmBL", "point": "27.22" }, { "id": "207", "nokp": "880720757477", "nama": "4SteCBIDmyqQjiT8OlKnEJajpuRLIdiRO7Roagc743JxiuZWQMdBrgA72lS8CbhDbAK4AH9hVypwPB84RcFTlNUw", "katalaluan": "TqTh86bJQFZkRUd83jGeRkM1UCy2yDFGnQRNC0L63bNnGydEGdW4Byv58mY3WTr10c88p1u7h0sXcXeHaVX4gSN4umhUFkw7", "point": "83.87" }, { "id": "208", "nokp": "304571977711", "nama": "hpwNMmZ1S3Dr0fIvfpFVr", "katalaluan": "CbLWoMRCHl5wR7XzGVC5k8oc012fh72qrKZnzFe0ysdAhCe1aCvu", "point": "9.20" }, { "id": "209", "nokp": "110692880600", "nama": "BqtEnEiCqRp3VjmqvMjv6K8P", "katalaluan": "Jd37qcwPVt65xGnYu9P95KJqfQ1uVv5h8befXEQGpf8TxqsuZKrK", "point": "275.66" }, { "id": "210", "nokp": "97693164943", "nama": "p5JD0ZCxtiNhcdCM4CfSTYpYJVXsWdt4BOKo8x6gl", "katalaluan": "O7UBNnlcDygcVlIAgLywAfq9hhnEnbBN9Eqa3r", "point": "9.94" }, { "id": "211", "nokp": "614758526266", "nama": "UGETysHKLIOK2G55hZUr8dXAl", "katalaluan": "xIX6aBvdlysUVBkySQjPU4ycfhQIclVS2GquOuq084KFpoKbLCISIrXs5RjbDeyCxQFLbDfKq679mjq9SaJOFOK4ZY6XdwF8q", "point": "2615.97" }, { "id": "212", "nokp": "126834883468", "nama": "IVsSmtFF7tUDNK8qxEmFsydv", "katalaluan": "Ar6bdVso9H15F5t2A779PlzfLU6FdG0c3ntuE4QBk6jyLR0rbGn8xn4uxMYRZXOWrU8aKjHcnLIX7fi8IjoWYvhgq5A", "point": "6.96" }, { "id": "213", "nokp": "120295917454", "nama": "vEIffQ6VosMi7mHAs8G9", "katalaluan": "K2gbA74w9ZMeCKfhKOXKKvL3boiei1FQaxdrbPiegXpe5W61rKQJKzpBgjqdtyGJ1k06a4uffgxGC76Hw8G1IqN77TV9tccjECT0", "point": "69.38" }, { "id": "214", "nokp": "431757540540", "nama": "1hsr8GUi6LBd0tEdKOgJpln4TZhQWHrf", "katalaluan": "qcV1g4syLeSi9CEWM2wJWgW5ZMsuKDXxFmnkMbxvzcuJ", "point": "97779.82" }, { "id": "215", "nokp": "459778222258", "nama": "B2U39iQMQ5Xs0t9kYjAROJ", "katalaluan": "7RmA4OucGmafpq66s4LzNQRD7VDhWU0MB33BMH5bM4XSo1JVAAO8HxzI2jPAPl5wyo7E7ARk9qjngMAC0rtDabGsnJA", "point": "68.35" }, { "id": "216", "nokp": "569931745111", "nama": "ONjYaa41BlXLzQ10KxwLGhQ43X2AABqrzXloSQAC3OzhVKtj5OoGYY0XINQ9riW3T3EajJiwSKEz", "katalaluan": "nReyEUXFrDQMpXgIx5hsuwN8mhHYrH2g8F3CoVpPm5OqQpTrumvYCSoE87EYUHGu0BJ7pNM", "point": "103.60" }, { "id": "217", "nokp": "878263223099", "nama": "U746t1oJwq5JctDU9QvTtYEbsog00ue1PAsbyjRcT2tlbOWF4orXftEUtEV2CUlYLucocgYqeflu1uV3b4AZ7c", "katalaluan": "iBmHPsFB1VjqEqGQJuYDyFUVgY2QNTztjAby9CaEz0m8eb9O5apKKvTAdyxb6FBCoAZS9fbqMjI8vhfY8y9pqpGRtocKA", "point": "446.16" }, { "id": "218", "nokp": "183000332317", "nama": "DkVMhO0QnqRyEnoZ3cU6HzhXCMCPxvCUyu3uBxe6ouEH0zy6aT7N2Yjw32bGj5ExVebKeYyiYRXvyQ", "katalaluan": "g3z4P8S09yb593zyFtq0kkQ22b1wP3x20llCPgQT0R0XYFWDT0goQzDbaGEsDKVDxpSAA3CrbCS8y9A", "point": "48.05" }, { "id": "219", "nokp": "218792636389", "nama": "6FyGvTDVF684Nw13K5KD37JnTitu380fC6NyDoANg00XnrlaK7NRbpwvpn9eMKaF0b8xqH9GUW6SS8rv39KmeYg", "katalaluan": "Av01sjo59mVhAJ70kPLLmEy4cylXPVYiYeY0xZBs", "point": "7345.60" }, { "id": "220", "nokp": "234238804589", "nama": "XjmPWZNhNopY5fu9C1xZkppXlrfLjo3jfEvbE6dBgq2MwsP", "katalaluan": "MMPkZHqdgjpYH3Z4uZpxX2qX6gA5RIwxVlGjWS01LpeYYkEcfwcapQ098s2J5HFiC", "point": "6831.40" }, { "id": "221", "nokp": "668611054686", "nama": "M2Sxw9fzw54xhTuK5eoo", "katalaluan": "T7AfdvR7ZxFsEzgy1gv5TmLyNf49mkRcQKQ49MHwaR1AS2a8YIy02N", "point": "454.84" }, { "id": "222", "nokp": "644725983473", "nama": "j9YkvlfzAHvYV8VymQpQEsiPbB5xyDq1Eq6uOeao5DxwdGJrxj9yZHbEWbtpYzA", "katalaluan": "atJlNw8bEsfeafxbnAite4ECUhHJ3ai8t7RUFNwDgGDxfKXm9nbMIt3GtvqpAdTZvaUUhFHV9lNlqIh9", "point": "5865.29" }, { "id": "223", "nokp": "387701525731", "nama": "GvG9eL6GNtQtqX38pn3bK4Slvea1bL6BbMAj8tTgycd13iZDTZVNQ9wWF8a0S6tvZWP9K05", "katalaluan": "gTGnLVB8PjHksGdaTM6DZeEutoHWPO", "point": "272.57" }, { "id": "224", "nokp": "153952557088", "nama": "IJCzdO6Nz2jbrCuDH98BUaX9wp8HO0wOzmxqbXf50Ds7K4n0NTcF9M4mRZ9hO3E5ZCldnwIKN2O1QTJDFkae", "katalaluan": "9dwsVOdgnkNkTzHmETcZ3JTyQsIDRyJ9gS1uScqEMOQE6AbTeaZ71zSZqM5LAN8Vg1XSjY9rnbz75I0S0UHvtwykcz2Y29HlFb", "point": "15.75" }, { "id": "225", "nokp": "882218107544", "nama": "GVDF7Lg9nNUlwPX5PXZYA56lYaFcTG6BBET2aRgHf0kV5OUvCQZPfoY3b4NdCwsakCwMR8sjedk5ZBWhKGRio", "katalaluan": "XIsAsUZiaaP47Vjivj55zGDpefWoFmKy63Px3NAw1CggeZrfP9Vjr", "point": "7245.60" }
];