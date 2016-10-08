<?php

class Welcome_test extends TestCase
{
	public function test_set_value()
	{
		$output = $this->request('POST', 'welcome/set_value', ['text' => '<s>abc</s>']);
		$this->assertEquals('&lt;s&gt;abc&lt;/s&gt;', $output);
	}

	public function test_form_validation_failed()
	{
		$output = $this->request('POST', 'welcome/form_validation', ['text' => '<s>abc</s>']);
		$this->assertContains('before form_validation->run(): <br>', $output);
		$this->assertContains('after validation failed: &lt;s&gt;abc&lt;/s&gt;<br>', $output);
	}

	public function test_form_validation_success()
	{
		$output = $this->request('POST', 'welcome/form_validation', ['text' => 'x']);
		$this->assertContains('before form_validation->run(): <br>', $output);
		$this->assertContains('after validation success: x<br>', $output);
	}
}
