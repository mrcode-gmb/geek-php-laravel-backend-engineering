#!/bin/bash

# ==========================================
# Student Folder Generator
# PHP & Laravel Backend Engineering
# ==========================================

# Check if student name is provided
if [ -z "$1" ]; then
  echo "❌ Error: Please provide the student name."
  echo "Usage: ./create-student.sh student-name"
  exit 1
fi

STUDENT_NAME="$1"
STUDENT_DIR="students/$STUDENT_NAME"

# Prevent overwriting existing student folder
if [ -d "$STUDENT_DIR" ]; then
  echo "⚠️ Student folder already exists: $STUDENT_DIR"
  exit 1
fi

echo "👨‍🎓 Creating folder structure for student: $STUDENT_NAME"

# Create student base directory
mkdir -p "$STUDENT_DIR"

# Create student README
cat <<EOF > "$STUDENT_DIR/README.md"
# $STUDENT_NAME

## Student Profile
This folder contains all weekly submissions for the PHP & Laravel Backend Engineering program.

## Submission Rules
- Each week has its own folder
- Follow weekly instructions strictly
- Keep code clean and readable
- Commit regularly with clear messages
EOF

# Create week folders
for i in {01..12}; do
  WEEK_DIR="$STUDENT_DIR/week-$i"

  mkdir -p "$WEEK_DIR"

  cat <<EOF > "$WEEK_DIR/README.md"
# Week $i Submission

## Description
Brief explanation of what you built this week.

## Files
- List your files here

## Challenges Faced
What was difficult?

## What I Learned
Key takeaways from this week.
EOF
done

echo "✅ Student folder created successfully!"
echo "📁 Location: $STUDENT_DIR"
echo "🚀 Student can now start submitting weekly work."
