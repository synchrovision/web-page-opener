<p align="center">
  <img src="https://img.shields.io/badge/MacOS-000?logo=apple">
  <img src="https://img.shields.io/badge/Xcode-333?logo=xcode&logoColor=147EFB">
  <img src="https://img.shields.io/badge/AndroidStudio-333?logo=androidstudio&logoColor=3DDC84">
  <img src="https://img.shields.io/badge/PHP-8.0-45A?logo=php">
</p>

概要
=

Macのターミナルを使って複数のブラウザで複数のURLを一括で開きます。

使い方
=

1. 任意のディレクトリにこのリポジトリをクローンします。

	```command
	git clone https://github.com/synchrovision/web-page-opener.git
	```

1. ``browsers.txt``に開きたいブラウザのリスト、``urls.txt``に開きたいURLのリストを保存します。
	```command
	echo "Safari\nGoogle Chrome\nFirefox\nSimurator\nAndroid" >> browsers.txt;
	echo "https://catpow.info" >> urls.txt;
	```
	ブラウザでSimuratorを指定した場合はXcodeに付属のiPhoneのSimurator、Androidを指定した場合はAndroidStudioに付属のemuratorでURLを開きます。
	それぞれあらかじめシミュレーター・エミュレータが開かれている必要があります。

1. ``main.php``をCLIで実行するとリストのブラウザでリストのURLが開かれます。