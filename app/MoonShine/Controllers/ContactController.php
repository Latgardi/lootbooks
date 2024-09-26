<?php

declare(strict_types=1);

namespace App\MoonShine\Controllers;

use App\Models\Contact;
use App\MoonShine\Pages\Contacts;
use MoonShine\MoonShineRequest;
use MoonShine\Http\Controllers\MoonShineController;
use Symfony\Component\HttpFoundation\Response;

final class ContactController extends MoonShineController
{
    public function update(MoonShineRequest $request): Response
    {
        $contact = Contact::first() ?? new Contact();
        foreach ($request->request->all() as $key => $value) {
            if ($contact->hasAttribute($key)) {
                $contact->{$key} = $value;
            }
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('/assets/images', ['disk' => 'public']);
            $contact->image = $image;
        }
        $contact->save();
        redirect()->back();

        return back();
    }
}
