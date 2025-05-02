<?php

	$list = array();




/*
	$item = array();
	$item['Keybind'] = "Alt + Shift + o";
	$item['Action'] = "開啟熱鍵提示";
	$list[] = $item;
*/

	$item = array();
	$item['Keybind'] = "Alt + Shift + x";
	$item['Action'] = "登出";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + z";
	$item['Action'] = "離開";
	$list[] = $item;

/*
	$item = array();
	$item['Keybind'] = "Alt + Shift + c";
	$item['Action'] = "Gnome Shell 重新載入設定";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + c";
	$item['Action'] = "Gnome Shell 重新啟動";
	$list[] = $item;
*/

	$item = array();
	$item['Keybind'] = "Alt + F1";
	$item['Action'] = "開啟主選單";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + F2";
	$item['Action'] = "開啟應用程式啟動器";
	$list[] = $item;

/*
	$item = array();
	$item['Keybind'] = "Alt + F3";
	$item['Action'] = "開啟視窗選單";
	$list[] = $item;
*/

	$item = array();
	$item['Keybind'] = "Win + c";
	$item['Action'] = "開啟工作空間列表/視窗列表";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Space";
	$item['Action'] = "開啟桌面功能選單";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Space";
	$item['Action'] = "開啟目前聚焦視窗功能選單";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + d";
	$item['Action'] = "開啟 Rofi Drun";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + r";
	$item['Action'] = "開啟 Rofi Run";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + w";
	$item['Action'] = "開啟 Rofi Window";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + f";
	$item['Action'] = "開啟檔案管理器 (nautilus)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + g";
	$item['Action'] = "開啟檔案管理器 (thunar)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + e";
	$item['Action'] = "開啟 (gnome-text-editor)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + b";
	$item['Action'] = "開啟網頁瀏覽器 (firefox)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + s";
	$item['Action'] = "開啟系統設定 (gnome-control-center)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + s";
	$item['Action'] = "開啟系統設定 (gnome-control-center)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Shift + s";
	$item['Action'] = "開啟系統設定 (gnome-control-center)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Ctrl + s";
	$item['Action'] = "開啟系統設定 (gnome-control-center)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Ctrl + Esc";
	$item['Action'] = "開啟程序管理器 (gnome-system-monitor)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + p";
	$item['Action'] = "開啟螢幕解析度設定 ()";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Enter";
	$item['Action'] = "開啟 Terminal (kgx)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + a";
	$item['Action'] = "開啟 Terminal (kgx)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + a";
	$item['Action'] = "開啟 Terminal (gnome-terminal)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + t";
	$item['Action'] = "開啟 Terminal (xfce4-terminal)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + t";
	$item['Action'] = "開啟 Terminal (qterminal)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + q";
	$item['Action'] = "視窗 / 關閉";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + f";
	$item['Action'] = "視窗 / 切換全螢幕";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + w";
	$item['Action'] = "視窗 / 最大化";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + x";
	$item['Action'] = "視窗 / 最小化";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + d";
	$item['Action'] = "切換顯示桌面";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + e";
	$item['Action'] = "視窗 / 開始移動";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + r";
	$item['Action'] = "視窗 / 開始更改大小";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + t";
	$item['Action'] = "視窗 / 保持永遠在最上方";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + y";
	$item['Action'] = "視窗 / 內容區塊收合";
	$list[] = $item;

/*
	$item = array();
	$item['Keybind'] = "Win + Esc";
	$item['Action'] = "聚焦切換至上一個視窗";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Esc";
	$item['Action'] = "聚焦切換至下一個視窗";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + grave";
	$item['Action'] = "切換到所有工作空間概覽";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Tab";
	$item['Action'] = "切換到所有視窗概覽";
	$list[] = $item;
*/

	$item = array();
	$item['Keybind'] = "Win + 滑鼠左鍵拖曳";
	$item['Action'] = "視窗 / 移動";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + 滑鼠右鍵拖曳";
	$item['Action'] = "視窗 / 更改大小";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + a";
	$item['Action'] = "聚焦切換至上一個視窗";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + s";
	$item['Action'] = "聚焦切換至下一個視窗";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + a";
	$item['Action'] = "切換至上一個工作空間";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + s";
	$item['Action'] = "切換至下一個工作空間";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + 1-9";
	$item['Action'] = "切換至工作空間 1-9";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + 1-9";
	$item['Action'] = "將視窗移至工作空間 1-9";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Print";
	$item['Action'] = "螢幕截圖";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Win + Print";
	$item['Action'] = "螢幕截圖 / 目前聚焦的視窗";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Ctrl + Print";
	$item['Action'] = "螢幕截圖 / 選取的區域";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Fn + F5 (XF86MonBrightnessDown)";
	$item['Action'] = "亮度 / 減弱";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Fn + F6 (XF86MonBrightnessUp)";
	$item['Action'] = "亮度 / 增強";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + [";
	$item['Action'] = "亮度 / 減弱";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + ]";
	$item['Action'] = "亮度 / 增強";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + v";
	$item['Action'] = "開啟音量控制器 (pavucontrol)";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Fn + F10 (XF86AudioMute)";
	$item['Action'] = "音量 / 切換靜音";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Fn + F11 (XF86AudioLowerVolume)";
	$item['Action'] = "音量 / 減小";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Fn + F12 (XF86AudioRaiseVolume)";
	$item['Action'] = "音量 / 增大";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + m";
	$item['Action'] = "音量 / 切換靜音";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + ,";
	$item['Action'] = "音量 / 減小";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Shift + .";
	$item['Action'] = "音量 / 增大";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + ,";
	$item['Action'] = "音量 / 小幅減小";
	$list[] = $item;

	$item = array();
	$item['Keybind'] = "Alt + Ctrl + .";
	$item['Action'] = "音量 / 小幅增大";
	$list[] = $item;




	return $list;
