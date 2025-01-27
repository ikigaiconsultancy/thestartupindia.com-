/*Dashboard Init*/
 
"use strict"; 
/*****E-Charts function start*****/
var echartsConfig = function() { 
	if( $('#e_chart_3').length > 0 ){
		var e_chart_3 = echarts.init(document.getElementById('e_chart_3'));
		var option3 = {
			tooltip: {
				show: true,
				trigger: 'axis',
				backgroundColor: '#fff',
				borderRadius:6,
				padding:6,
				axisPointer:{
					lineStyle:{
						width:0,
					}
				},
				textStyle: {
					color: '#324148',
					fontFamily: '"Poppins", sans-serif',
					fontSize: 12
				}	
			},
			xAxis: {
				type: 'category',
				boundaryGap: false,
				data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				axisLine: {
					show:false
				},
				axisTick: {
					show:false
				},
				axisLabel: {
					textStyle: {
						color: '#5e7d8a'
					}
				}
			},
			yAxis: {
				type: 'value',
				axisLine: {
					show:false
				},
				axisTick: {
					show:false
				},
				axisLabel: {
					textStyle: {
						color: '#5e7d8a'
					}
				},
				splitLine: {
					lineStyle: {
						color: 'transparent',
					}
				}
			},
			grid: {
				top: '3%',
				left: '3%',
				right: '3%',
				bottom: '3%',
				containLabel: true
			},
			series: [
				{
					data: [820, 932, 901, 934, 1290, 1330, 1320],
					type: 'line',
					symbolSize: 6,
					itemStyle: {
						color: '#f83f37',
					},
					lineStyle: {
						color: '#f83f37',
						width:2,
					},
					areaStyle: {
						color: '#f83f37',
					},
				}
			]
		};
		e_chart_3.setOption(option3);
		e_chart_3.resize();
	}
	if( $('#e_chart_6').length > 0 ){
		var e_chart_6 = echarts.init(document.getElementById('e_chart_6'));
		var option6 = {
			tooltip: {
				show: true,
				trigger: 'axis',
				backgroundColor: '#fff',
				borderRadius:6,
				padding:6,
				axisPointer:{
					lineStyle:{
						width:0,
					}
				},
				textStyle: {
					color: '#324148',
					fontFamily: '"Poppins", sans-serif',
					fontSize: 12
				}	
			},
			xAxis: {
				type: 'category',
				boundaryGap: false,
				data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				axisLine: {
					show:false
				},
				axisTick: {
					show:false
				},
				axisLabel: {
					textStyle: {
						color: '#5e7d8a'
					}
				}
			},
			yAxis: {
				type: 'value',
				axisLine: {
					show:false
				},
				axisTick: {
					show:false
				},
				axisLabel: {
					textStyle: {
						color: '#5e7d8a'
					}
				},
				splitLine: {
					lineStyle: {
						color: 'transparent',
					}
				}
			},
			grid: {
				top: '3%',
				left: '3%',
				right: '3%',
				bottom: '3%',
				containLabel: true
			},
			series: [
				{
					data:[120, 132, 101, 134, 90, 230, 210],
					type: 'line',
					stack: 'a',
					symbolSize: 6,
					itemStyle: {
						color: '#f83f37',
					},
					lineStyle: {
						color: '#f83f37',
						width:2,
					},
					areaStyle: {
						color: '#f83f37',
					},
				},
				{
					data: [220, 182, 191, 234, 290, 330, 310],
					type: 'line',
					stack: 'a',
					symbolSize: 6,
					itemStyle: {
						color: '#fff1f1',
					},
					lineStyle: {
						color: '#fff1f1',
						width:2,
					},
					areaStyle: {
						color: '#fff1f1',
					},
				},
				{
					data: [150, 232, 201, 154, 190, 330, 410],
					type: 'line',
					stack: 'a',
					symbolSize: 6,
					itemStyle: {
						color: '#fb9f9b',
					},
					lineStyle: {
						color: '#fb9f9b',
						width:2,
					},
					areaStyle: {
						color: '#fb9f9b',
					},
				}
			]
		};
		e_chart_6.setOption(option6);
		e_chart_6.resize();
	}
	if( $('#e_chart_7').length > 0 ){
		var e_chart_7 = echarts.init(document.getElementById('e_chart_7'));
		var option7 = {
			tooltip: {
				show: true,
				trigger: 'axis',
				backgroundColor: '#fff',
				borderRadius:6,
				padding:6,
				axisPointer:{
					lineStyle:{
						width:0,
					}
				},
				textStyle: {
					color: '#324148',
					fontFamily: '"Poppins", sans-serif',
					fontSize: 12
				}	
			},
			xAxis: {
				type: 'category',
				boundaryGap: false,
				data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				axisLine: {
					show:false
				},
				axisTick: {
					show:false
				},
				axisLabel: {
					textStyle: {
						color: '#5e7d8a'
					}
				}
			},
			yAxis: {
				type: 'value',
				axisLine: {
					show:false
				},
				axisTick: {
					show:false
				},
				axisLabel: {
					textStyle: {
						color: '#5e7d8a'
					}
				},
				splitLine: {
					lineStyle: {
						color: 'transparent',
					}
				}
			},
			grid: {
				top: '3%',
				left: '3%',
				right: '3%',
				bottom: '3%',
				containLabel: true
			},
			series: [
				{
					data: [820, 932, 901, 934, 1290, 1330, 1320],
					type: 'line',
					symbolSize: 6,
					lineStyle: {
						color: '#f83f37',
						width:2,
					},
					itemStyle: {
						color: '#f83f37',
					},
					areaStyle: {
						normal: {
							color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
								offset: 0,
								color: '#fb9f9b'
							}, {
								offset: 1,
								color: '#f83f37'
							}])
						}
					},
				}
			]
		};
		e_chart_7.setOption(option7);
		e_chart_7.resize();
	}
}
/*****Resize function start*****/
var echartResize;
$(window).on("resize", function () {
	/*E-Chart Resize*/
	clearTimeout(echartResize);
	echartResize = setTimeout(echartsConfig, 200);
}).resize(); 
/*****Resize function end*****/
/*****Function Call start*****/
echartsConfig();
/*****Function Call end*****/