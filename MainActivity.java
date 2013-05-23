package com.example.moonwork;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.Bundle;
import android.view.Menu;
import android.webkit.WebView;

public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		ConnectivityManager cManager;
		NetworkInfo mobile, wifi;
		
		cManager = (ConnectivityManager)getSystemService(Context.CONNECTIVITY_SERVICE);
		mobile = cManager.getNetworkInfo(ConnectivityManager.TYPE_MOBILE);
		wifi = cManager.getNetworkInfo(ConnectivityManager.TYPE_WIFI);

		WebView myWebView = (WebView)findViewById(R.id.webView);
		myWebView.loadUrl("http://moonwork.dothome.co.kr/");
		myWebView.getSettings().setJavaScriptEnabled(true);
		
		/*
		if(mobile.isConnected() || wifi.isConnected()){
		}else{
			new AlertDialog.Builder(this)
			.setIcon(android.R.drawable.ic_dialog_alert)
			.setTitle("��Ʈ��ũ ���� ����").setMessage("��Ʈ��ũ ���� ���� Ȯ�� �� �ٽ� �õ����ֽʽÿ�")
			.setPositiveButton("Ȯ��", new DialogInterface.OnClickListener() {
				
				@Override
				public void onClick(DialogInterface dialog, int which) {
					// TODO Auto-generated method stub
					finish();
				}
			}).show();
		}*/
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

}
