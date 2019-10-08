<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600" >
        <style>
            body {
                margin: 20px;
            }

            table {
                width: 100%;
                margin-bottom: 18px;
                padding: 0;
                font-size: 13px;
                border: 1px solid #141415;
                border-spacing: 0;
                border-collapse: separate;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                background-color: #37393c;
                font-family: Helvetica, Arial;
                font-size: 12px;
                color: white;
            }

            table th, table td {
                padding: 10px 10px 9px;
                line-height: 18px;
                text-align: left;
            }

            table th {
                padding-top: 9px;
                font-weight: bold;
                vertical-align: middle;
                color: #b6daff;
            }

            table td {
                vertical-align: top;
                border-top: 1px solid #ddd;
            }

            table th+th,table td+td,table th+td {
                border-left: 1px solid #ddd;
            }

            table thead tr:first-child th:first-child, table tbody tr:first-child td:first-child {
                -webkit-border-radius: 5px 0 0 0;
                -moz-border-radius: 5px 0 0 0;
                border-radius: 5px 0 0 0;
            }

            table thead tr:first-child th:last-child, table tbody tr:first-child td:last-child {
                -webkit-border-radius: 0 5px 0 0;
                -moz-border-radius: 0 5px 0 0;
                border-radius: 0 5px 0 0;
            }

            table tbody tr:last-child td:first-child {
                -webkit-border-radius: 0 0 0 5px;
                -moz-border-radius: 0 0 0 5px;
                border-radius: 0 0 0 5px;
            }

            table tbody tr:last-child td:last-child {
                -webkit-border-radius: 0 0 5px 0;
                -moz-border-radius: 0 0 5px 0;
                border-radius: 0 0 5px 0;
            }

            table tbody tr:nth-child(odd) td {
                background-color: #323841;
            }

            table tbody tr:hover td {
                background-color: #202223;
                cursor: pointer;
            }
            .up {
                transform: rotate(-135deg);
                -webkit-transform: rotate(-135deg);
            }

            .down {
                transform: rotate(45deg);
                -webkit-transform: rotate(45deg);
            }
            i {
                border: solid black;
                border-width: 0 3px 3px 0;
                display: inline-block;
                padding: 3px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
		<title>Statistics</title>
	</head>
	<body>
		<table>
			<thead>
				<tr>
                    <th>ID</th>
					<th>IP(click on the ip below)</th>
					<th>COUNTRY</th>
					<th>URL</th>
					<th>BROWSER</th>
					<th>USER AGENT</th>
                    <th>CREATED AT</th>
				</tr>
			</thead>
			<tbody>
            @foreach($data as $item)
				<tr>
					<td>{{$item['id']}}</td>
                    <td onclick="insertParam('{{$item['ip']}}')">{{$item['ip']}}</td>
					<td>{{$item['country']}}</td>
					<td>{{$item['url']}}</td>
					<td>{{$item['browser']}}</td>
                    <td>{{$item['user_agent']}}</td>
                    <td>{{$item['created_at']}}</td>
				</tr>
            @endforeach
            @if(!empty($total))
            <td colspan="2">TOTAL COUNT {{$ip}}: </td>
            <td colspan="5">{{$total}}</td>
            @endif
			</tbody>
		</table>
        <div class="links">
            <a href="{{ url('api/show') }}">GO TO SHORT PAGE</a>
        </div>
        <script type="text/javascript">
            function insertParam(value) {
                let key = encodeURI('ip');console.log(key);
                value = encodeURI(value);
                let kvp = document.location.search.substr(1).split('&');
                let i = kvp.length;
                let x;
                while(i--) {
                x = kvp[i].split('=');
                if (x[0]==key) {
                    x[1] = value;
                    kvp[i] = x.join('=');
                    break;
                }
            }

                if(i < 0){
                    kvp[kvp.length] = [key,value].join('=');
                }
                document.location.search = kvp.join('&');
            }
        </script>
	</body>
</html>
