import os

print("Checking environment...")
try:
    import fitz # PyMuPDF
    print("PyMuPDF (fitz) available")
    doc = fitz.open("Liqulofi_Private_Limited.pdf")
    print(f"Total pages: {len(doc)}")
    
    # Check page 16 (index 15)
    page16 = doc[15]
    image_list = page16.get_images()
    print(f"Page 16 images count: {len(image_list)}")
    for img_index, img in enumerate(image_list):
        xref = img[0]
        base_image = doc.extract_image(xref)
        image_bytes = base_image["image"]
        image_ext = base_image["ext"]
        print(f"Img {img_index}: xref={xref}, ext={image_ext}, size={len(image_bytes)} bytes")
except Exception as e:
    print(f"PyMuPDF error: {e}")
