package com.example.moonwork;

import android.app.Activity;
import android.content.Context;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.Bundle;
import android.os.Handler;
import android.os.Message;
import android.view.KeyEvent;
import android.view.Menu;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Toast;

public class MainActivity extends Activity {

	boolean flag = false;
	Handler handler;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		ConnectivityManager cManager;
		NetworkInfo mobile, wifi;
		WebViewClient client = new WebViewClient();
		
		cManager = (ConnectivityManager)getSystemService(Context.CONNECTIVITY_SERVICE);
		mobile = cManager.getNetworkInfo(ConnectivityManager.TYPE_MOBILE);
		wifi = cManager.getNetworkInfo(ConnectivityManager.TYPE_WIFI);

		WebView myWebView = (WebView)findViewById(R.id.webView);
		myWebView.setWebViewClient(client);
		myWebView.loadUrl("http://moonwork.dothome.co.kr/");
		myWebView.getSettings().setJavaScriptEnabled(true);
		

		handler = new Handler(){
			public void handleMessage(Message msg){
				if(msg.what == 0)
					flag = false;
			}
		};
		
		/*
		if(mobile.isConnected() || wifi.isConnected()){
		}else{
			new AlertDialog.Builder(this)
			.setIcon(android.R.drawable.ic_dialog_alert)
			.setTitle("네트워크 연결 오류").setMessage("네트워크 연결 상태 확인 후 다시 시도해주십시요")
			.setPositiveButton("확인", new DialogInterface.OnClickListener() {
				
				@Override
				public void onClick(DialogInterface dialog, int which) {
					// TODO Auto-generated method stub
					finish();
				}
			}).show();
		}*/
	}
	
	public boolean onKeyDown(int keyCode, KeyEvent event){
		super.onKeyDown(keyCode, event);
		
		if(event.getAction() == KeyEvent.ACTION_DOWN){
			switch(keyCode){
			case KeyEvent.KEYCODE_BACK:
				if(!flag){
					Toast.makeText(getApplicationContext(), "뒤로 버튼을 한번 더 누르시면 종료됩니다.", Toast.LENGTH_SHORT).show();
					flag = true;
					handler.sendEmptyMessageDelayed(0, 2000);
					
					return false;
				}else{
					finish();
				}
				return true;
			}
		}
		return false;
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

}
