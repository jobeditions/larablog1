@extends('layout.master')
@section('title1','Add Post | Admin')
@section('body1')
<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">               
                 <form action="/posts" method="POST" enctype="multipart/form-data">
                 {{ csrf_field() }}
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label for="title">Title</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Post Title..." class="medium" id="title" name="title"/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="author">Author</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Author  Name..." class="medium" id="author" name="author"/>
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="select">
                                    <option value="1">Category One</option>
                                    <option value="2">Category Two</option>
                                    <option value="3">Cateogry Three</option>
                                </select>
                            </td>
                        </tr>
                   
                    
                        <tr>
                            <td>
                                <label for="date-picker">Date Picker</label>
                            </td>
                            <td>
                                <input type="text" id="date-picker" class="date-picker"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label for="body">Content</label>
                            </td>
                            <td>
                                <textarea id="body" name="body" col=30 row=60></textarea>
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <button type="submit">Publish</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    @endsection