$(function() {
	'use strict';

	var piedata = [ {
		label: 'الدورات',
		data: [
			[1, courses]
		],
		color: '#007bff'
	}, {
		label: 'المدونة',
		data: [
			[1, blog]
		],
		color: '#8500ff'
	}, {
		label: 'الأخبار',
		data: [
			[1, news]
		],
		color: '#f7557a'
	}, {
		label: 'الصفحة الرئيسية',
		data: [
			[1, home]
		],
		color: '#494c57'
	}];
	$.plot('#flotPie1', piedata, {
		series: {
			pie: {
				show: true,
				radius: 1,
				label: {
					show: true,
					radius: 2 / 3,
					formatter: labelFormatter,
					threshold: 0.1
				}
			}
		},
		grid: {
			hoverable: true,
			clickable: true
		}
	});


	function labelFormatter(label, series) {
		return '<div style="font-size:8pt; text-align:center; padding:2px; color:white;">' + label + '<br/>' + Math.round(series.percent) + '%</div>';
	}
});
